
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Budget vs Sales</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
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
                            <label for="">SKU</label>
                            <input type="text" name="sku" id="sku" class="form-control">
                            @if($errors->has('sku'))
                                <small style="color: red">{{$errors->first('sku')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" id="image">
                            @if($errors->has('image'))
                                <small style="color: red">{{$errors->first('image')}} </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea name="" class="summernote" id="description"></textarea>

                            @if($errors->has('Description'))
                                <small style="color: red">{{$errors->first('Description')}} </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control select2" name="category_id" id="category_id ">
                            <option value="" selected disabled>--select category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('Description'))
                                <small style="color: red">{{$errors->first('Description')}} </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                            @if($errors->has('price'))
                                <small style="color: red">{{$errors->first('price')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Actual Price</label>
                            <input type="number" name="actual_price" id="actual_price" class="form-control">
                            @if($errors->has('actual_price'))
                                <small style="color: red">{{$errors->first('actual_price')}}</small>
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
