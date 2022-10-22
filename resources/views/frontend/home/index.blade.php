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
    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>

    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>


    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>


    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>


    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>


    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>


    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>

    <div class="card text-center">
        <a href="#">
            <div class="p-40">
        <div class="image">
            <img src="{{url('assets/frontend/images/laptop.png')}}" alt="">
        </div>
        <div class="card-body text-center">
            <p> All Laptop </p>
        </div>
    </div>
    </a>
    </div>
</div>

 </div>

</section>



  {{--Category area end--}}

  {{--product area end--}}
<section class="product">
     <div class="container product__container">

        <div class="heading">
            <h2 class="title">
                Products
            </h2>
        </div>
            <div class="product-area grid-five">
                <div class="card">
                    <div class="image">
                        <img src="{{url('assets/frontend/images/kraken.jpg')}}" alt="">
                    </div>
 
                    <div class="card-body p-20">

                        <p> <a href="#">HP Pavilion 15-eg1678TU Core i5 11th Gen 15.6" FHD Laptop</a> </p>
                        <div class="row mt-15">
                            <div class="cloumn-half">
                                <p class="price ">Price: £1112</p>
                            </div>

                            <div class="cloumn-half">
                                <p class="sku text-right"> <a href="#">SKU: Baaauu</a> </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{url('assets/frontend/images/kraken.jpg')}}" alt="">
                    </div>
 
                    <div class="card-body p-20">

                        <p> <a href="#">HP Pavilion 15-eg1678TU Core i5 11th Gen 15.6" FHD Laptop</a> </p>
                        <div class="row mt-15">
                            <div class="cloumn-half">
                                <p class="price ">Price: £1112</p>
                            </div>

                            <div class="cloumn-half">
                                <p class="sku text-right"> <a href="#">SKU: Baaauu</a> </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            
     </div>

</section>


  {{--product area end--}}


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