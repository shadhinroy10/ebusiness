
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Budget vs Sales</h4>
                    <a href="{{route('category.create')}}" class=" btn btn-primary"><i class="fas fa-plus"></i>Add Now</a>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @if($errors->has('name'))
                                <small style="color: red">{{$errors->first('name')}} </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control">
                            @if($errors->has('slug'))
                                <small style="color: red">{{$errors->first('slug')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" name="image" id="image" class="" >
                            @if($errors->has('image'))
                                <small style="color: red">{{$errors->first('image')}} </small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- main content end -->

@endsection

@section('scripts')
    <script>
        $("#name").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
        });

        $('#image').dropify();
    </script>

@endsection
