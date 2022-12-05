<?php

namespace App\Http\Controllers;

use App\Actions\Parser\Parser;
use App\Http\Requests\ValidateHomeSearch;
use App\Models\NovaGroup;
use App\Models\NutriscoreGrade;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $products = Product::paginate(20);
        $contadorProductos = count($products);

        return view('home', compact('products', 'contadorProductos'));
    }

    public function searchFromApi(Request $request)
    {
        if (!isset($request->home_search) && $request->home_search === null){
            return redirect()->route("home");
        }
        $ean = str_pad($request->home_search, 13, "0", STR_PAD_LEFT);

        $product = Product::where('EAN', $ean)->get();

        if (count($product) === 0) {
            $api = new ApiController();
            $content = $api->getProductByEAN($ean);

            $parser = new Parser($content, 'en');
            $data = $parser->getAllData();

            $nutriscore_id = NutriscoreGrade::where('name', $data['PRODUCT_NUTRISCORE_GRADE'])->get();
            $nova_group_id = NovaGroup::where('name', $data['PRODUCT_NOVA_GROUP'])->get();

            $product = Product::create([
                'title' => $data['PRODUCT_TITLE'],
                'quantity' => $data['PRODUCT_QUANTITY'],
                'EAN' => $data['PRODUCT_EAN'],
                'nutriscore_grade_id' => $nutriscore_id[0]->name ?? 1,
                'nova_group_id' => $nova_group_id[0]->name ?? 1,
                'image' => $data['REGULAR_FRONT_IMAGE'],
            ]);

            return redirect()->route("product", ['product' => $product]);

        }
    }

    public function show(Product $product)
    {
        return view('home', ['product' => $product]);
    }
}
