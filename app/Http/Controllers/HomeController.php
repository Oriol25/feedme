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

class HomeController extends Controller
{
    public function index() {
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
            if($response == null) {
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
        return redirect()->route("show.product", compact('product'));

    }

    public function show(Product $product)
    {
        return view('show', compact('product'));
    }
}
