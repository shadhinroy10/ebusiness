@extends('layouts.frontend')

@section('content')

    {{--banner area start--}}



    {{--banner area end--}}

    {{--product area start--}}
    <section class="product">
        <div class="container product__container">

            <div class="heading">
                <h2 class="title">
                    Products
                </h2>
            </div>
            <div class="product-area grid-five">
                @foreach($products as $product)
                    <div class="card">
                        <div class="image">
                            <img src="{{url('upload/images', $product->image)}}">
                        </div>

                        <div class="card-body p-20">

                            <p> <a href="{{route('web.product.show', $product->slug)}}" >{{$product->name}}</a> </p>
                            <div class="row mt-15">
                                <div class="cloumn-half">
                                    <p class="price ">{{$product->price}}</p>
                                </div>

                                <div class="cloumn-half">
                                    <p class="sku text-right"> <a href="#">{{$product->sku}}</a> </p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>



        </div>

    </section>


    {{--product area end--}}

@endsection
