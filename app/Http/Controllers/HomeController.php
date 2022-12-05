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
        if (!isset($request->homeSearch) && $request->homeSearch === null){
            return redirect()->route("home");
        }
        $ean = str_pad($request->homeSearch, 13, "0", STR_PAD_LEFT);

        $api = new ApiController();
        $content = $api->getProductByEAN($ean);

        $parser = new Parser($content, 'en');

        dd($parser->getAllData());
    }
}
