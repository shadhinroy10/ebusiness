<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebusiness</title>

    {{--font awesome--}}

    <link rel="stylesheet" href="{{asset('assets/frontend/fontawesome1/css/all.min.css')}}">

    {{--slick slider css--}}
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/slick/slick.css')}}">
    {{--css--}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">

</head>
<body>
    {{--menu area start--}}


        <div class="menu">
            <div class="container menu__container">
                <div class="logo">
                    <img src="{{url('assets/frontend/images/ds.png')}}" alt="logo">
                </div>

                <nav class="navber">
                    <ul>
                        <li><a href="{{route('home')}}" class="{{ Route::is ('home') ? 'active':''}}">Home</a></li>
                        <li><a href="{{route('web.category.index')}}" class="{{Route::is('category.index')? 'active':''}}">Category</a></li>
                        <li><a href="{{route('web.product.index')}}" class="{{Route::is('web.product.index')? 'active': ''}}" >Products</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{route('about')}}" class="{{ Route::is ('about') ? 'active':''}}">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>

                    </ul>
                </nav>

                <div class="menu__btn">
                    @if(Auth::user())
                        <a href="{{route('user.profile')}}" class="menu-btn">My Account</a>
                        <a href="{{route('user.logout')}}" class="menu-btn">Logout</a>
                    @else
                    <a href="{{route('user.login')}}" class="menu-btn">Login</a>
                    @endif

                    <a href="#" class="menu-btn" id="menu_btn"><i class="fa-solid fa-bars"></i></a>

                </div>

            </div>
        </div>
    {{--menu area end--}}

@yield('content')


  {{--footer area start--}}

<section class="footer">
    <div class="container footer__container">
        <div class="footer-grid">

            <div class="widget">
                <h2 class="mb-20">Support</h2>
                <a href="#" class="footer-big-btn">
                    <div class="helpline-btn">
                        <i class="fa-solid fa-phone"></i>
                        <div class="text">
                            <p>9Am - 8PM</p>
                            <h5>0185168850</h5>
                        </div>
                    </div>

                </a>
                <a href="#" class="footer-big-btn">
                    <div class="helpline-btn">
                        <i class="fa-solid fa-phone"></i>
                        <div class="text">
                            <p>9Am - 8PM</p>
                            <h5>0185168850</h5>
                        </div>
                    </div>

                </a>

            </div>

            <div class="widget">
                <h2 class="mb-20">About Us</h2>
                <nav class="footer-menu">

                    <ul>
                        <li><a href="#">EMI Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Star Point Policy</a></li>
                        <li><a href="#">Brands</a></li>

                    </ul>

                </nav>

            </div>

            <div class="widget">
                <h2 class="mb-20">About Us</h2>
                <nav class="footer-menu">

                    <ul>
                        <li><a href="#">EMI Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Star Point Policy</a></li>
                        <li><a href="#">Brands</a></li>

                    </ul>

                </nav>

            </div>


            <div class="widget">
                <h2 class="mb-20">About Us</h2>
                <nav class="footer-menu">

                    <ul>
                        <li><a href="#">EMI Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Star Point Policy</a></li>
                        <li><a href="#">Brands</a></li>

                    </ul>

                </nav>

            </div>

            <div class="widget">
                <h2 class="mb-20">STAY CONNECTED</h2>
                <div class="address">
                    <p> <span>Star Tech & Engineering Ltd</span>
                        6th floor, 28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka 1000</p>

                        <div class="emai mt-15">
                            <p>Email:
                                <span>shadhinroy923@gmail.com</span>
                            </p>
                        </div>
                </div>

            </div>



        </div>

    </div>


</section>

  {{--footer area end--}}


    {{--jquery--}}

    <script src="{{asset('assets/frontend/js/jquery-3.6.1.min.js')}}"></script>

    {{--slick slider--}}

    <script src="{{asset('assets/frontend/vendors/slick/slick.min.js')}}"></script>

    {{--custom script--}}

    <script>

        $('#menu_btn').click(function (e) {
            e.preventDefault();
            $('.navber').toggleClass('show');

        });
$('.banner-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa-solid fa-angle-left'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa-solid fa-chevron-right'></i></button>",
  appendArrows:'.slider-arrows',
  appendDots:'.slider-dots',
});
    </script>
    @yield('script')

<script src="https://kit.fontawesome.com/abc51e59fa.js" crossorigin="anonymous"></script>
</body>
</html>
