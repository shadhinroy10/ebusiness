@extends('layouts.frontend')

@section('content')

    {{--banner area start--}}



    {{--banner area end--}}

    {{--product area start--}}
    <section class="product">
        <div class="container product__container">

            <div class="heading">

            </div>
            <div class="single-product">

                    <div class="card left_card">
                        <div class="image">
                            <img src="{{url('upload/images', $product->image)}}">
                        </div>


                    </div>

                <div class="card right_card">

                    <div class="card-body p-20">

                        <p> <a href="#">{{$product->name}}</a> </p>

                        <div class="row mt-15">
                            <div class="cloumn-half">
                                <p class="price ">£{{$product->price}}</p>
                            </div>

                            <div class="cloumn-half">
                                <p class="sku text-right"> <a href="#">{{$product->sku}}</a> </p>
                            </div>
                        </div>



                        <a href="{{route('order.index',$product->slug)}}" class="btn mt-15"> Place Order</a>
                        <button class="btn btn-block mt-15" id="show_desc">Details</button>
                        <div class="mt-15 desc-hide" id="description">
                            {!!$product->description!!}
                        </div>

                    </div>
                </div>



            </div>



        </div>

    </section>

    <section>


            <hr>
        <div class="details">
            <nav class="details_nav">
                <ul>
                    <li>
                        <button class="btn mt-15" id="show_desc">Details</button>
                        <div class="mt-15 desc-hide" id="description">
                            {!!$product->description!!}
                        </div>
                    </li>
                    <li>Specification</li>
                    <li>Sipping</li>
                    <li>Tracking</li>
                </ul>
            </nav>
        </div>

    </section>


    {{--product area end--}}

@endsection

@section('script')

    <script>
        $('#show_desc').click(function(event){
            $("#description").toggleClass('desc-hide');
        });
    </script>
@endsection
