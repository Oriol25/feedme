<?php

namespace App\Http\Controllers;

use App\Actions\Parser\Parser;
use App\Models\NovaGroup;
use App\Models\NutriscoreGrade;
use App\Models\Product;
use App\Models\Alergeno;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateHomeSearch;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {

        $string_xml = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $final_string_xml = '</urlset>';
        $products = Product::all();

        $string_xml .= '<url>';
        $string_xml .= '<loc>' . route('home') . '</loc>';
        $string_xml .= '<lastmod>' . Carbon::now()->format("Y-m-d") . '</lastmod>';
        $string_xml .= '<changefreq>monthly</changefreq>';
        $string_xml .= '</url>';

        foreach ($products as $product) {
            $string_xml .= '<url>';
            $string_xml .= '<loc>' . route('show.product', ['name' => $product->title, 'code' => $product->EAN, 'product' => $product->id]) . '</loc>';
            $string_xml .= '<lastmod>' . Carbon::create($product->updated_at)->format("Y-m-d") . '</lastmod>';
            $string_xml .= '<changefreq>monthly</changefreq>';
            $string_xml .= '</url>';
        }

        $string_xml .= $final_string_xml;

        //dd($string_xml);

        $products = Product::paginate(20);
        $contadorProductos = count($products);

        return view('home', compact('products', 'contadorProductos'));
    }

    public function searchFromApi(ValidateHomeSearch $request)
    {

        /* if (!isset($request->home_search) && $request->home_search === null){
            return redirect()->route("home");
        } */

        $ean = str_pad($request->home_search, 13, "0", STR_PAD_LEFT);

        $product = Product::where('EAN', $ean)->first();
        if (!isset($product->id)) {
            $api = new ApiController();

            $content = $api->getProductByEAN($ean);
            $response = json_decode($content, true);
            if ($response == null) {
                return redirect()->route('home');
            }
            $parser = new Parser($content, 'en');

            $data = $parser->getAllData();
            // dd($data);

            $nutriscore_id = NutriscoreGrade::where('name', $data['PRODUCT_NUTRISCORE_GRADE'])->first();
            $nova_group_id = NovaGroup::where('key', $data['PRODUCT_NOVA_GROUP'])->first();

            $product = Product::create([
                'title' => $data['PRODUCT_TITLE'],
                'quantity' => $data['PRODUCT_QUANTITY'],
                'EAN' => $data['PRODUCT_EAN'],
                'nutriscore_grade_id' => $nutriscore_id->id ?? 6,
                'nova_group_id' => $nova_group_id->id ?? 5,
                'image' => $data['REGULAR_FRONT_IMAGE'],
            ]);

            $alergenos = Alergeno::whereIn('name', $data['PRODUCT_ALLERGENS'])->get();

            $product->alergenos()->attach($alergenos);
        }

        return redirect()->route("show.product")->with("name", $product->name)->with("code", $product->EAN)->with("product", $product->id);
    }

    public function show($name = null, $code = null, Product $product)
    {

        $alergenos = implode(", ", $product->alergenos->pluck("name")->toArray());

        return view('show', compact('product', 'alergenos'));
    }
}
