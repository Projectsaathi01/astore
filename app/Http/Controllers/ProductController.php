<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
        //
        return view('admin.product.index', ['product'=> Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('admin.product.create', ['category'=>$category]);
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
        request()->validate([
                'category'=>'required',
                 'title'=>'required',
                 'slug'=>'required',
                 'description'=>'required',
                 'price'=>'required',
                 'discount_price'=>'required'
            ]);

        $product = new Product([
               'category'=>$request->get('category'),
               'title'=>$request->get('title'),
               'slug'=>$request->get('slug'),
               'description'=>$request->get('description'),
               'price'=>$request->get('price'),
              'discount'=>$request->get('discount_price')
            ]);
        if($product->save()){
          return view('admin.product.index', ['product'=>Product::all()])->with('sucess', 'Producted added Sucessfully');
           
        }

        return back()->withInput('err', 'Ther is something wrong, Could not be added');
         

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $cat=Category::all();
        $product=Product::find($product->id);
        // return $product;
        return view('admin.product.edit',['product'=>$product])->with('category', $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // return Product::find($product->id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        request()->validate([
                 'category'=>'required',
                 'title'=>'required',
                 'slug'=>'required',
                 'description'=>'required',
                 'price'=>'required',
                 'discount_price'=>'required'
            ]);

       $productUpdate=Product::where('id', $product->id)
                                     ->update([
                                           
                                                 'category'=>$request->get('category'),
                                                  'title'=>$request->get('title'),
                                                  'slug'=>$request->get('slug'),
                                                  'description'=>$request->get('description'),
                                                  'price'=>$request->get('price'),
                                                 'discount'=>$request->get('discount_price')

                                        ]);
        if($productUpdate){
           return view('admin.product.index',['product'=>Product::all()])->with('sucess', 'Updated Sucessfully');
        }
      return back()->withInput('err', 'There are something problem, Could not be update');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if(Product::find($product->id)->delete()){
            return view('admin.product.index', ['product'=>Product::all()])->with('sucess', 'Deleted Sucessfully');
        }
        return view('admin.product.index', ['product'=>Product::all()])->with('err', 'Deleted  Unsucessfully');
    }
}
