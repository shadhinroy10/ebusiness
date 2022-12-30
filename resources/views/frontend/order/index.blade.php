@extends('layouts.frontend')

@section('content')


    {{--product area start--}}
    <section class="order">
        <div class="container order_container">

                <div class="card">

                    <div class="card-body p-20">
                        <h3>Order Page</h3>
                        <p> <a href="#">{{$product->name}}</a> </p>
                        <div class="row mt-15">
                            <div class="cloumn-half">
                                <p class="price ">£{{$product->price}}</p>
                            </div>

                        </div>
                        <form action="{{route('order.submit')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden"name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <button class="btn mt-15"> Place Order</button>
                        </form>

                    </div>
                </div>
        </div>

    </section>

@endsection
