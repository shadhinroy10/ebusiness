@extends('layouts.frontend')

@section('content')

    {{--banner area start--}}


    <div class="banner">
        <div class="container banner__container">
            <div class="slider-area">
        <div class="slider-arrows"></div>
        <div class="banner-slider">
            <div class="slider-item">


                <div class="banner-area">
                    <h2>Top Sell</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo laudantium soluta fugit autem, quasi sunt voluptatum porro.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo laudantium soluta fugit autem, quasi sunt voluptatum porro.</p>
                    <a href="#" class="btn btn-large">Shop Now</a>
            </div>

        </div>


        <div class="slider-item">


            <div class="banner-area">
                <h2>Top Sell</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo laudantium soluta fugit autem, quasi sunt voluptatum porro.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo laudantium soluta fugit autem, quasi sunt voluptatum porro.</p>
                <a href="#" class="btn btn-large">Shop Now</a>
        </div>

    </div>


    </div>


</div>

<div class="slider-dots">
</div>

</div>
</div>


{{--banner area end--}}
{{--Category area start--}}

<section class="category">
<div class="container category__container">

<div class="heading">
<h2 class="title">
    Category
</h2>
</div>

<div class="category-area grid-eight">

    @foreach($categories as $category)
    <div class="card text-center">
        <a href="{{route('web.category.show', $category->slug)}}">
            <div class="p-40">
        <div class="image">
         <img src="{{url('upload/images',$category->image)}}" alt="">
     </div>
     <div class="card-body text-center">
        <p> {{$category->name}} </p>
        </div>
        </div>
        </a>
    </div>
    @endforeach

</div>

</div>

</section>



{{--Category area end--}}

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
                    <img src="{{url('upload/images', $product->image)}}" alt="">
                </div>

                <div class="card-body p-20">

                    <p> <a href="{{route('web.product.show', $product->slug)}}">{{$product->name}}</a> </p>
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
