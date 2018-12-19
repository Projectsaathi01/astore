@extends('admin.dashboard')
@section('content')
	<div class="card-body">
        <form action="{{route('category.update', ['category'=>$category])}}" method="POST">
            @csrf
            @method('PATCH')
            @if(isset($category) && count($category)>0)
            <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                <input name="title" type="text" class="form-control" value="{{ $category->title }}">
            </div>

            <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input name="slug" type="text" class="form-control" value="{{ $category->slug }}">
            </div>                                                              
                                           
             <div class="form-group">
                 <label for="description">Description</label>
                 <textarea class="form-control" idrows="3" name="description">{{ $category->description }}</textarea>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             <a href="#" type="btn" class="btn btn-danger">Cancel</a>
         </form>
     </div>
     @endif
@endsection