<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();

        return view('shop')->with('products', $products);
    }


    /**
     * Display a listing of the resource.
     *@param string $slug
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('product')->with('product', $product);

        
    }

    public function search(Request $request)
    {
        // Search Validation - A product has to have at least 3 matching characters in order to displayed as a result
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        // % wildcard will return results similar to the query
        $products = Product::where('name', 'like', "%$query%")->get();

        return view ('search-results')-> with('products' , $products);
    }

}