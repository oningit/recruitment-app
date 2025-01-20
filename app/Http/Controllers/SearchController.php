<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    /**
     * Find resource from storage.
     */
    public function index(Request $request) 
    {
        return view('search', [
            'products' => Product::where('location', $request->location)->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        //dd($product);
        return view('search-show', compact('product'));
        /* return view('search-show', [
            'product' => $product
        ]); */

    }
}
