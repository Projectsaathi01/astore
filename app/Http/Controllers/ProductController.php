<?php

namespace App\Http\Controllers;

use App\Product;
<<<<<<< HEAD
use App\Category;
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
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
<<<<<<< HEAD
        return view('admin.product.index', ['product'=> Product::all()]);
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
<<<<<<< HEAD
        $category = Category::all();
        return view('admin.product.create', ['category'=>$category]);
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
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
<<<<<<< HEAD
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
         

=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
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
<<<<<<< HEAD
        $cat=Category::all();
        $product=Product::find($product->id);
        // return $product;
        return view('admin.product.edit',['product'=>$product])->with('category', $cat);
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
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
<<<<<<< HEAD
        // return Product::find($product->id); 
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
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
<<<<<<< HEAD
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
=======
    }
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
<<<<<<< HEAD
        if(Product::find($product->id)->delete()){
            return view('admin.product.index', ['product'=>Product::all()])->with('sucess', 'Deleted Sucessfully');
        }
        return view('admin.product.index', ['product'=>Product::all()])->with('err', 'Deleted  Unsucessfully');
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
    }
}
