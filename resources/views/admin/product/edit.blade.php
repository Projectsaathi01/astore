@extends('admin.dashboard')
@section('content')
	<div class="card-body">
        <form action="{{route('product.update', $product->id)}}" method="POST">
            @method('PATCH')
            @csrf
             @if(isset($category) && count($category)>0)
            <div class="form-group">
                <label for="title" class="col-form-label">Choose Category</label>
                   <select name="category" class="form-control">
                      @foreach($category as $category)
                       <option>
                           {{ $category->title }}
                       </option>
                       @endforeach
                   </select>
            </div>
            @endif
            @if(isset($product)&&count($product)>0)
            <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                   	<input name="title" type="text" class="form-control" value="{{$product->title}}">
            </div>

            <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input name="slug" type="text" class="form-control" value="{{$product->slug}}">
            </div>                                                              
                                           
            <div class="form-group">
                 <label for="description">Description</label>
                 <textarea class="form-control" idrows="3" name="description">{{$product->description}}</textarea>
            </div>

            <div class="form-group row">
            <div class="col-6">
                <label class="form-control-label">Price: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rs.</span>
                    </div>
                    <input type="text" class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1" name="price" value="{{$product->price}}">
                </div>
            </div>
            <div class="col-6">
                <label class="form-control-label">Discount: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rs.</span>
                    </div>
                    <input type="text" class="form-control" name="discount_price" placeholder="0.00" aria-label="discount_price" aria-describedby="discount" value="{{$product->discount}}">
                </div>
            </div>
        </div>
@endif
        <!-- for sidebar -->
        
             <button type="submit" class="btn btn-primary">Submit</button>
             <a href="#"  class="btn btn-danger">Cancel</a>
         </form>
     </div>
@endsection