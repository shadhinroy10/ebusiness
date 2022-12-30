@extends('layouts.frontend')

@section('content')

    {{-- about section start --}}

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
    {{-- about section start --}}

@endsection
