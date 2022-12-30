
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
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($categories->count() > 0)
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>
                                    <img src="{{url('upload/images', $category->image)}}" style="width: 100px" alt="">
                                </td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td >



                                    <form action="{{route('category.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete')"><i class="far fa-trash-alt"></i> Delete</button>
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

