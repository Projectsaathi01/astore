@extends('admin.dashboard')
@section('content')
	<div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Category List</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @if(isset($product)&&count($product)>0)
                                           @foreach($product as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->title}}</td>
                                                <td>{{$product->slug}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->discount}}</td>
                                                <td><a href="{{route('product.show', ['product'=>$product->id])}}">Edit</a></td>
                                                <td><a href="#">Trash</a></td>
                                                <td>
                                                    <a class="dropdown-item" href="#" onclick="helpDelete()">
                                                    Delete
                                                  </a>
                                                    <form id="delete-form" action="{{route('product.destroy',$product->id)}}}" method="post"hidden="hidden">
                                                      @method('delete')
                                                      @csrf
                                                      <button type="submit"></button>
                                                      </form>
                                                </td>
                                            </tr>
                                                @endforeach
                                                @endif
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>

                <script type="text/javascript">
                    function helpDelete(){
                        if(confirm("Are you want to delete")){
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                       }
                    }
                </script>
@endsection