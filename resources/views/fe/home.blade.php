<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}"/>
    <title>Thời Trang Cao Cấp 10K</title>
    <style>
        .content{
            margin-top:0px;
            margin-left:10px;
        }
        .service-header{
            background-color:#ddd;
            font-size: 15px;
            width:100%;
            height:40px;
            font-family:"Century Gothic";
            padding: 6.25px;
        }
        .contact{
            margin-left:10px;
            font-size:17px;
        }
        .email {
            margin-left: 30px;
            font-size: 17px;
        }
        .header-icons {
            float: right;
            font-size: 20px;
            margin-right: 80px;
        }
        .head__logo {
            margin-top: 8px;
            font-size: 60px;
            font-family: "CASTELLAR";
        }
        .container {
            width: 1400px;
        }
        a{
            text-decoration:none;
            color:black;
        }
        .box {
            height: 40px;
            border:1px solid grey;
            background-color: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            width:260px;
            margin-top:14px;
            margin-left:25px;
            margin-bottom: 14px;
            float:left;
            padding-left: 0;
        }
        .input_search{
            background: none;
            outline: none;
            border: none;
            padding-left: 20px;
            color: black;
            width: 230px;
        }
        b{
            font-size:30px;
        }

        .NMN{
            float:right;
            width:50%;
        }
        .list{
            color:black;
            width: 120px;
            line-height:30px;
            display:inline-block;
        }
        a:hover{
            text-decoration:none;
            color:black;
        }
        a{
            color:black;
            text-decoration:none;
        }
        .navbar{
            border-bottom: 1px solid #f1f1f1;
            margin: 30px 0 0 0;
            position: fixed;
            top:0;
        }
        .navbar a:hover{
            background-color: white;
        }
        .navigation-desktop-menu{
            list-style: none;
            font-family:"Century Gothic";
            font-size: 16.25px;
            margin-top: 12px;
            margin-bottom: 0px;
        }


        .dropdown{
            text-align:center;

        }

        ul li ul.dropdown{
            /* Set width of the dropdown */
            float:left;
            background: white;
            display: inline-block;
            position: relative;
            z-index: 999;
            left: 0;
        }
        ul li:hover ul.dropdown{
            display: block;	/* Display the dropdown */

        }
        ul li ul.dropdown li{
            display: block;
        }
        .dropdown-content{
            display:none;
            position: absolute;
            background-color: #f8f8f8;
            min-width:200px;
            left:0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            font-family:"Time New Roman";
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            width:100%;
            height:auto;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            width: 100%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #f8f8f8;
        }
        .dropbtn{
            /* margin-left: 0px; */
            font-size: 17px;
        }
        *{box-sizing: border-box;}

        /* slideshow container */
        {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .myslide {display: none;}
        img {vertical-align: middle;
            height: 350px;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1400px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 4.85s;
            animation-name: fade;
            animation-duration: 4.85s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
        .title{
            margin: 30px 0;
        }
        .column{
            float:left;
            width: 100%;
            margin: 0 15px;
        }
        h5{
            text-align: left;
            margin-left:15px;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        #navbar .dropbtn:hover {
            background-color: #f8f8f8;
            color: black;
        }

        #navbar a.active {
            background-color: #4CAF50;
            color: white;
        }
        .content {
            padding: 16px;
        }
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }
        .sticky + .content {
            padding-top: 60px;
        }
        .navigation-tab {
            display: inline-block;
            margin-left: 50px;
            font-size: 15px;
            margin-top: 10px;
        }
        .navbar-default{
            z-index:111;
        }
        .row .makeup{
            display:flex;
            width:600px;
        }


        .product_info{
            background-color:white;
        }
        .product_info p{
            margin:0;
        }
        .carousel-col img{
            width: 270px;
            height:330px;
            object-fit: cover;
        }
        .myslide img{
            object-fit:cover;
        }


        section {
            padding-top: 30px;
        }

        section .section-title {
            text-align: center;
            color: #f8f8f8;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        .col-footer{
            max-width: 350px;
            max-height: 300px;
            margin-left: 80px;
        }
        #footer {
            background: #f8f8f8 !important;
        }
        #footer h4{
            padding-left: 10px;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: black;
            text-align: center;
        }
        #footer a {
            color: black;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        #footer ul.social li{
            padding: 3px 0;
        }
        #footer ul.social li a i {
            margin-right: 5px;
            font-size:25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.social li:hover a i {
            font-size:30px;
            margin-top:-10px;
        }
        #footer ul.social li a,
        #footer ul.quick-links li a{
            color: black;
        }
        #footer ul.social li a:hover{
            color:#eeeeee;
        }
        #footer ul.quick-links li{
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.quick-links li:hover{
            padding: 3px 0;
            margin-left:5px;
            font-weight:700;
        }
        #footer ul.quick-links li a i{
            margin-right: 5px;
        }
        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px){
            #footer h4 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
        #icon-footer{
            margin: 15px 0;
        }
        #icon-footer a{
            align-content: center;
        }
    </style>
</head>

<body>
<div class="head">
    <div class="head__top">
        <div class="service-header">
                    <span class="contact">
                        <span class="glyphicon glyphicon-earphone"></span>
                        <span>Liên Hệ: 09 8888 6666</span>
                    </span>
            <span class="email">
                        <span class="fas fa-envelope"></span>
                        <span>Email: hotro@gmail.com</span>
                    </span>
            <div class="header-icons">
                &nbsp &nbsp &nbsp
                @if(Auth::check())
                    <span class=" dropdown">
                        <a  href=""><span class="header-icon dropdown animate-dropdown "><i class="far fa-user">
                                    <span style="font-family:'Century Gothic';font-size:15px;">&nbsp  {{Auth::user()->username}}</span></i></a>
                            <div class="dropdown-content " style="font-size: 15px;">
                                <a href="">Quản lí sản phẩm</a>
                                <a href="">Quản lí đơn hàng</a>
                                <a href="" data-toggle="tooltip" title="Log out"><i class="glyphicon glyphicon-log-out"></i>&nbsp Log Out</a>
                            </div>
                        </span>
                @else
                    <span class="header-icon dropdown animate-dropdown">
                            <a href="" target="_parent">
                                <i class="far fa-user"></i>
                            </a>
                        </span>
                @endif
                &nbsp &nbsp &nbsp
                <span class="header-icon dropdown animate-dropdown" >
                            <a href="">
                                <i class="fas fa-shopping-basket"></i>
                            </a><span class="badge badge-light"></span>
                        </span>
            </div>
        </div>
    </div>
    <a href=""><div class="head__logo" align=center>10K</div></a>
</div>
<div class="head__nav">
    <div class="navbar-default" id ='navbar'>
        <div class="container">
            <div class="row">
                <div class="col-md-9" align="center">
                    <div class="nav__left">
                        <ul class ="navigation-desktop-menu">
                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>SẢN PHẨM</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <div class="row makeup">
                                                <div class="col-md-4">
                                                    <h5><strong>LIPSTICK</strong></h5>
                                                    <a href="">Son</a>
                                                    <a href="">Son dưỡng - Tẩy da chết</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5><strong>FACE MAKEUP</strong></h5>
                                                    <a href="">Kem nền - Kem lót - Kem che khuyết điểm</a>
                                                    <a href="">Phấn phủ - Phấn nén</a>
                                                    <a href="">Blusher</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5><strong>EYE MAKEUP</strong></h5>
                                                    <a href="">Lông mày</a>
                                                    <a href="">Mascara</a>
                                                    <a href="">Phấn mắt</a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>SKINCARE</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <a href="">Tẩy trang</a>
                                            <a href="">Sữa rửa mặt</a>
                                            <a href="">Tẩy tế bào chết</a>
                                            <a href="">Toner</a>
                                            <a href="">Serum</a>
                                            <a href="">Kem chống nắng</a>
                                        </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>HAIR</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <a href="">Sản phẩm nhuộm</a>
                                            <a href="">Ủ tóc</a>
                                            <a href="">Dầu gội & Dầu xả</a>
                                        </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>BATH & BODY</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <a href="">Sữa tắm</a>
                                            <a href="">Sữa dưỡng thể</a>
                                            <a href="">Bath bomb</a>
                                        </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>FUNCTIONAL FOODS</a>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="" class='dropbtn'>BEAUTY TOOLS</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav__right">
                        <form action="" role="search" class="box">
                            <input type="search" name="search" placeholder="Search here" class="input_search" />
                            <button style="border:none; background-color:white; margin-right:15px;"><i class='fas fa-search' style='font-size:15px'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@section('content')
    <div class="slideshow-container">

        <div class="myslide fade">
            <div class="numbertext">1 / 3</div>
            <img src="/resources/views/images/1.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="myslide fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://www.paulaschoice.com/on/demandware.static/-/Library-Sites-paulachoice/default/dwc25bdc5b/images/homepage-new/us_190717_desktop_panel-b_2010-review.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="myslide fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://www.shiseido.com.vn/on/demandware.static/-/Sites-shiseido_global_vn-Library/default/dw62c81aad/images/home/slide/HOME_E-series_Product_desktop_A1.jpg" style="width:100%">
            <div class="text"></div>
        </div>

    </div>
    </div><br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
            var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("myslide");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        }
    </script>

    {{--    <main id='main-content' class='main-page'>--}}
    {{--        <section class="product">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-12 col-centered">--}}
    {{--                        <h2 class="title" align=center>NEW ARRIVALS</h2>--}}
    {{--                        <ul >--}}
    {{--                            <div id="carousel" class="owl-carousel owl-theme">--}}
    {{--                                @foreach($news as $product)--}}
    {{--                                    <div class ="product__item">--}}
    {{--                                        <div class="carousel-col">--}}
    {{--                                            <a href="#">--}}
    {{--                                                <div>--}}
    {{--                                                    <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>--}}
    {{--                                                </div>--}}
    {{--                                            </a>--}}
    {{--                                            <div class ="product_info">--}}
    {{--                                                <a href="{{route('detail',$product->id)}}">{{$product->product_name}}</a>--}}
    {{--                                                <p class="price">{{ number_format($product->product_price,0,',','.') }} VNĐ </p>--}}
    {{--                                                <div class="single-item-caption">--}}
    {{--                                                    <p>--}}
    {{--                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |--}}
    {{--                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>--}}
    {{--                                                    <div class="clearfix"></div>--}}
    {{--                                                    </p>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                            @endforeach--}}
    {{--                            <!-- <div class="left carousel-control">--}}
    {{--                                        <a href="#carousel" role="button" data-slide="prev">--}}
    {{--                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
    {{--                                            <span class="sr-only">Previous</span>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="right carousel-control">--}}
    {{--                                        <a href="#carousel" role="button" data-slide="next">--}}
    {{--                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
    {{--                                            <span class="sr-only">Next</span>--}}
    {{--                                        </a>--}}
    {{--                                    </div>    -->--}}
    {{--                            </div>--}}
    {{--                        </ul>--}}
    {{--                        <div class="col-md-12 col-centered">--}}
    {{--                            <h2 class = "title" align=center>SALE OFF</h2>--}}
    {{--                            <ul>--}}
    {{--                                <div id="carousel" class="owl-carousel owl-theme">--}}
    {{--                                    @foreach($sales as $product)--}}
    {{--                                        <div class ="product__item">--}}
    {{--                                            <div class="carousel-col">--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <!-- <div class="wrapper"> -->--}}
    {{--                                                    <div class="img">--}}
    {{--                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>--}}
    {{--                                                        <div class="ribbon-wrapper">--}}
    {{--                                                            <div class="ribbon">20% OFF</div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- </div> -->--}}
    {{--                                                </a>--}}
    {{--                                                <div class ="product_info">--}}
    {{--                                                    <a href="{{route('detail',$product->id)}}">{{$product->product_name}}</a>--}}
    {{--                                                    <p class="price"><del>{{number_format($product->product_price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>--}}
    {{--                                                    <div class="single-item-caption">--}}
    {{--                                                        <p>--}}
    {{--                                                            <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |--}}
    {{--                                                            <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>--}}
    {{--                                                        <div class="clearfix"></div>--}}
    {{--                                                        </p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    @endforeach--}}

    {{--                                </div>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 col-centered">--}}
    {{--                            <h2 class = "title" align=center>HOT SUMMER</h2>--}}
    {{--                            <ul >--}}
    {{--                                <div id="carousel" class="owl-carousel owl-theme">--}}
    {{--                                    @foreach($summers as $product)--}}
    {{--                                        <div class ="product__item">--}}
    {{--                                            <div class="carousel-col">--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <div>--}}
    {{--                                                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </a>--}}
    {{--                                                <div class ="product_info">--}}
    {{--                                                    <a href="{{route('detail',$product->id)}}">{{$product->product_name}}</a>--}}
    {{--                                                    <p class="price">{{number_format($product->product_price,0,',','.')}} VNĐ</p>--}}
    {{--                                                    <div class="single-item-caption">--}}
    {{--                                                        <p>--}}
    {{--                                                            <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |--}}
    {{--                                                            <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>--}}
    {{--                                                        <div class="clearfix"></div>--}}
    {{--                                                        </p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}
    {{--                                    @endforeach--}}
    {{--                                </div>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <script>--}}
    {{--                            $(document).ready(function(){--}}
    {{--                                $('.owl-carousel').owlCarousel({--}}
    {{--                                    loop:true,--}}
    {{--                                    margin:10,--}}
    {{--                                    nav:false,--}}
    {{--                                    autoplay:2000,--}}
    {{--                                    item:4,--}}
    {{--                                    responsive:{--}}
    {{--                                        0:{--}}
    {{--                                            items:4--}}
    {{--                                        },--}}
    {{--                                        600:{--}}
    {{--                                            items:4--}}
    {{--                                        },--}}
    {{--                                        1000:{--}}
    {{--                                            items:4--}}
    {{--                                        }--}}
    {{--                                    }--}}
    {{--                                })--}}
    {{--                            });--}}
    {{--                        </script>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    </main>--}}
    <footer>
        <section class="footer">

            <div class="footer">
                <div class="footer-left col-md-4">
                    <p class="about">
                        <span><strong>About Us</strong></span><br><br>
                        Website bán hàng với các chức năng như xem danh sách sản phẩm, Danh sách sản phẩm theo từng loại,chức năng mua hàng và xử lý đơn hàng, chức năng đăng nhập và đăng xuất, Xử lý tìm kiếm theo tên và theo giá sản phẩm.
                    </p>
                    <br>
                    <div class="icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-center col-md-4">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>334 Nguyễn Trãi, Thanh Xuân, Hà Nội</span></p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>(+84) 982160593</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="#">nmn@gmail.com</a></p>
                    </div>
                </div>
                <div class="footer-right col-md-4">
                    <h2>NMN<span></h2>
                    <p class="menu">
                        <a href="#"> Home</a> |
                        <a href="#"> About</a> |
                        <a href="#"> Services</a> |
                        <a href="#"> Portfolio</a> |
                        <a href="#"> News</a> |
                        <a href="#"> Contact</a>
                    </p>
                    <p class="name"> Company Name &copy; 2019</p>
                    <div class="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9176126980487!2d105.80578381464521!3d20.99593939427444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2sVNU+University+of+Science!5e0!3m2!1sen!2s!4v1566118193929!5m2!1sen!2s" width="400" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
<script>
    window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }window.addEventListener('scroll', stickyNavigation);
</script>


</html>
<!-- <script src="{{ asset('js/test.js') }}"></script> -->
