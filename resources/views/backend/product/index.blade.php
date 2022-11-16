
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>Budget vs Sales</h4>
                    <a href="{{route('category.create')}}" class=" btn btn-primary"><i class="fas fa-plus"></i>  Add Now</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>price</th>
                                <th>Actual price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($products->count() > 0)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            <img src="{{url('upload/images', $product->image)}}" alt="">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->sku}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->actual_price}}</td>
                                        <td>{{$product->category['name']}}</td>
                                    </td>




                                        <form action="{{route('category.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{route('category.edit',$product->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>

                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Alrt')"><i class="far fa-trash-alt"></i> Delete</button>
                                        </form>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No Data Found</td>
                                </tr>
                            @endif
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- main content end -->

@endsection

