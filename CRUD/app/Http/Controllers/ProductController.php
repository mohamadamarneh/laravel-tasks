<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fro show data 
        $prs=Product::all();
        // $prs=Product::latest()->pageinate(1);

        return view("products.index",compact("prs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to craete row data in table
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            "name"=>"required",
            "price"=>"required",
        ]);
        $prs=Product::create($request->all());
        return redirect()->route("products.index")
        ->with("Success","added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // $prs = Product::findOrFail("id");
        return view("products.show",compact("product"));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // $product = Product::findOrFail("id");
        return view("products.edit",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            "name"=>"required",
            "price"=>"required"
        ]);
        $product->update($request->all()) ;
        return redirect()->route("products.index")
        ->with("Success","edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete() ;
        return redirect()->route("products.index")
        ->with("Success","deleted successfully");

    }
}
