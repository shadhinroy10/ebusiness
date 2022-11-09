
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>Budget vs Sales</h4>
                    <a href="{{route('category.create')}}" class=" btn btn-primary"><i class="fas fa-plus"></i>Add Now</a>
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
                                <td>1</td>
                                <td>Irwansyah Saputra</td>
                                <td>2017-01-09</td>
                                <td><div class="badge badge-success">Active</div></td>
                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
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

