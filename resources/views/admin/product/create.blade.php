@extends('layouts.admin.dashboard')
@section('content')
	<div class="card-body">
        <form>
            <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                   	<input name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input name="slug" type="text" class="form-control">
            </div>                                                              
                                           
            <div class="form-group">
                 <label for="description">Description</label>
                 <textarea class="form-control" idrows="3"></textarea>
            </div>

            <div class="form-group row">
            <div class="col-6">
                <label class="form-control-label">Price: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rs.</span>
                    </div>
                    <input type="text" class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1" name="price" value="">
                </div>
            </div>
            <div class="col-6">
                <label class="form-control-label">Discount: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rs.</span>
                    </div>
                    <input type="text" class="form-control" name="discount_price" placeholder="0.00" aria-label="discount_price" aria-describedby="discount" value="">
                </div>
            </div>
        </div>

        <!-- for sidebar -->
        
             <button type="submit" class="btn btn-primary">Submit</button>
             <a href="#" type="btn" class="btn btn-danger">Cancel</a>
         </form>
     </div>
@endsection