<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class TrashController extends Controller
{
    //
    public function index(){
    	 return view('admin.product.trash', ['product'=>Product::where('status', '0')->get()]);
    }
    public function show(){
             
    }
    public function edit(){
          
    }
    public function create(){
         
    }
    public function store(Request $request){
      $product=Product::where('id', $request->id)->where('status', '1');
      if($product->update([
          'status'=>'0'
        ])){
       return view('admin.product.trash',['product'=>Product::where('status', '0')->get()])->with('sucess', 'sucessfully Trash');
        }
        return back()->with('err', 'Something is wrong, Could not trashed');
    }



    public function update(Product $product, $id){
    	$product=Product::find($id);
    	$product->status='1';
    	if($product->save()){
    		return view('admin.product.index',['product'=>Product::where('status', '1')->get()])->with('sucess', 'Restored Sucessfully');
    	}
         return back()->with('err', 'Ther is somethig problem, Could not Restored');
     }

}


