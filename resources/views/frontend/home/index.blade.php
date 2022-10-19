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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        
                    </ul>
                </nav>

                <div class="menu__btn">
                    <a href="#" class="menu-btn">Login</a>
                    <a href="#" class="menu-btn" id="menu_btn"><i class="fa-solid fa-bars"></i></a>
                    
                </div>

            </div>
        </div>
    {{--menu area end--}}

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
    

    {{--banner area end--}}
 {{--Category area start--}}


  {{--Category area end--}}


    {{--jquery--}}

    <script src="{{asset('assets/frontend/js/jquery-3.6.1.min.js')}}"></script>

    {{--slick slider--}}

    <script src="{{asset('assets/frontend/vendors/slick/slick.min.js')}}"></script>

    {{--custom script--}}

    <script>
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

<script src="https://kit.fontawesome.com/abc51e59fa.js" crossorigin="anonymous"></script>
</body>
</html>