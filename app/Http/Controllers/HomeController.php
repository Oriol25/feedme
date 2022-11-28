<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateHomeSearch;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {      
        $products = Product::paginate(20);
        $contadorProductos = count($products);

        return view('home', compact('products', 'contadorProductos'));
    }

    public function searchFromApi(ValidateHomeSearch $request)
    {
        $api = new ApiController();
        $content = $api->getProductByEAN($request->home_search);
        // $content = new ApiController::getProductByEAN($request->home_search);

        dd($content->parser());
    }
}
