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
        /*body{*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    height: 100vh;*/
        /*    background: #112c38;*/
        /*}*/

        ul{
            /*margin-bottom: 0px;*/
            margin-top: -13px;
            padding: 0;
            display: flex;
            margin-left: 80px;
        }

        ul li{
            list-style: none;
            margin: 0 50px;
            transition: 0.5s;
        }

        ul li a{
            display: block;
            position: relative;
            text-decoration: none;
            padding: 0px;
            font-size: 27px;
            font-family: 'Century Gothic';
            color: #030000;
            transition: .5s;
            /* text-transform: uppercase; */
        }

        ul:hover li a{
            transform: scale(1);
            opacity: .2;
            filter: blur(1px);
        }

        ul li a:hover{
            transform: scale(1.5);
            opacity: 1;
            filter: blur(0);
        }

        ul li a::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #89ffe3;
            transition: transform .5s;
            transform-origin: right;
            transform: scaleX(0);
            z-index: -1;
        }

        ul li a:hover::before{
            transition: transform .5s;
            transform-origin: left;
            transform: scaleX(1);
        }


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
        .head__logo {;
            font-size: 70px;
            font-family: "Copperplate", Fantasy;
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
            margin-top:17px;
            margin-left:25px;
            margin-bottom: 15px;
            float:left;
            padding-left: 0;
        }
        .input_search{
            background: none;
            outline: none;
            border: none;
            padding-left: 20px;
            color: #dc1010;
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
            float:left;
            background: white;
            display: inline-block;
            position: relative;
            z-index: 999;
            left: 0;
        }
        ul li:hover ul.dropdown{
            display: block;

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
            box-shadow: 0px 8px 16px 0px rgba(21, 1, 1, 0.2);
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

            font-size: 17px;
        }
        *{box-sizing: border-box;}

        {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .myslide {display: none;}
        img {vertical-align: middle;
            height: 350px;}

        .slideshow-container {
            max-width: 1400px;
            position: relative;
            margin: auto;
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

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
                        <section>
                            <ul>
                                <li><a href="#" data-text="Home">Home</a></li>
                                <li><a href="#" data-text="About">About</a></li>
                                <li><a href="#" data-text="Services">Services</a></li>
                                <li><a href="#" data-text="Team">Team</a></li>
                                <li><a href="#" data-text="Contact">Contact</a></li>
                            </ul>
                        </section>
{{--                        <ul class ="navigation-desktop-menu">--}}
{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>SẢN PHẨM</a>--}}
{{--                                    <ul>--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <div class="row makeup">--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <h5><strong>LIPSTICK</strong></h5>--}}
{{--                                                    <a href="">Son</a>--}}
{{--                                                    <a href="">Son dưỡng - Tẩy da chết</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <h5><strong>FACE MAKEUP</strong></h5>--}}
{{--                                                    <a href="">Kem nền - Kem lót - Kem che khuyết điểm</a>--}}
{{--                                                    <a href="">Phấn phủ - Phấn nén</a>--}}
{{--                                                    <a href="">Blusher</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <h5><strong>EYE MAKEUP</strong></h5>--}}
{{--                                                    <a href="">Lông mày</a>--}}
{{--                                                    <a href="">Mascara</a>--}}
{{--                                                    <a href="">Phấn mắt</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>SKINCARE</a>--}}
{{--                                    <ul>--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="">Tẩy trang</a>--}}
{{--                                            <a href="">Sữa rửa mặt</a>--}}
{{--                                            <a href="">Tẩy tế bào chết</a>--}}
{{--                                            <a href="">Toner</a>--}}
{{--                                            <a href="">Serum</a>--}}
{{--                                            <a href="">Kem chống nắng</a>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>HAIR</a>--}}
{{--                                    <ul>--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="">Sản phẩm nhuộm</a>--}}
{{--                                            <a href="">Ủ tóc</a>--}}
{{--                                            <a href="">Dầu gội & Dầu xả</a>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>BATH & BODY</a>--}}
{{--                                    <ul>--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="">Sữa tắm</a>--}}
{{--                                            <a href="">Sữa dưỡng thể</a>--}}
{{--                                            <a href="">Bath bomb</a>--}}
{{--                                        </div>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>FUNCTIONAL FOODS</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class='navigation-tab'>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a href="" class='dropbtn'>BEAUTY TOOLS</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav__right">
                        <form action="" role="search" class="box">
                            <input type="search" name="search" placeholder="Tìm kiếm" class="input_search" />
                            <button style="border:none; background-color:white; margin-right:15px;"><i class='fas fa-search' style='font-size:15px'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
    <div class="slideshow-container">

        <div class="myslide fade">
            <img src="https://lh3.googleusercontent.com/__NOPvs63uzxEsfzvZ3egc7o_9eBKkABZsdRz2oJGL4F8FaKmHUPMZifkXqxpk7dfcni_-MwoUtU6PV-pDAikwiRaTtZ2masU94qefsO74bSOAb0cqwtWhPgwExkB3wasVokVGxRvy7el2PWZQrkuQYi8Mg-sK369Ztago6X_KDDaLmOjB0J1t2mmIjHADFd42pcqVQbbYVhzm9yRkv2CzZXjwCX5aysnV6YCet6MM5h3LqeTIShP9SAVI0dA1qT3mId-l11E5w8-l8_WiAgHQlKno6h3WCgPXF8GWjta0W5hB7I4cbSLjMHrrlmBHVx0ntAwVGIP5y3skE3TTAkM-rg5RhOkgvoZ3SXEerciB4LEDlv6H2uSi-E9rf9sg524gfxRbEbywN8Hu1MKZImqxu9nHvhUc85a0B5SN89q7MsgNAOHxJzX8J5gil9VmJD8Rmrln1pOas0VGCu1ZZ-saWgfmBhdPmnVJful4YglHKVYiQnk82VqhPGKnYXnXLopHICzzmZB1qSpFSs_OWqmBL8oS0-LgvduSj_pWBe5W1O_EC85DvQ0y82_vEbcKV0HQsea5-H1s9_tE72hBdFEsD4MHzInCfRLl0IztJmsthlWcrRyCtNnyCpnJQDJ4Lb4sDEfNGY39tFg0X-d9DVOLSNh1oAyOV94otEQPvnGuNH0U4Cvf5RtgbVw8ysL1cO82Lkngl4JqT14hfMnsyHKh4=w1750-h440-no?authuser=1">
            <div class="text"></div>
        </div>

        <div class="myslide fade">
            <img src="https://lh3.googleusercontent.com/Ss6nlDDTmLIUY89e3P9ehXV1JkD-iNKS4tgCGusACY5CtFGac4TydIY0YGdLtymtYdMSoFKmQNqWr8Axl_FuASKeedqXniWAbtVdVkN6ya9Rmpq5affPrVU9rXvY7zEtAVR6O-cigZkRaqo3w6Jty80zxhPA_QNTNFRYfg5QQMcF0OiSVqVgcXp44mOqYodpVSthl556pGYKAlRlmhsAPNbNeNL9KTAu3MBhTkd4xdyPzoBEkNBLOJ0Zj9bBOpYsxUf6atVHRiO3kuE3C-v_CObLRM1kzm32bYulgVtyGt3w5KwBZ7wax5mbqdrKgl_CzK0UpoUuB8njFbPSBf3PbcEjl9R3BnDFD1TRxsmBQIwYEfEXR96WVxPrKrkcGJGf4fUm4Pxescgm-Nhh6W4-ifBea2Wep72gjQoNOpFyBdVWK42UC4Yaq3fwSOJaNPifsE7eX4d4gIeq3BAU31Lfaeu3D1eAQ1GT5aee6m2e7FwYSHnkqJPmy6oo__NE7NG9R_PRYDLl2urKBVqqWWRugsnIHI8GlVRI3kaDEQZYLow_6SdcChvls401lLYycOVDRo8wOkiNllokVMg3-w_CdR_JIBQd3xg4kwbr84lucogNUjR_nhUBp74in2VCYUGL6VUCQjewaYYSEH1v89woGz0IF0nhpBc25T6bow__say4SVabVnph8fgxD7vWoQCryQW6-vxX2ysoIg5zwG2-HRI=w1470-h370-no?authuser=1">
            <div class="text"></div>
        </div>

        <div class="myslide fade">
            <img src="https://lh3.googleusercontent.com/ftxdgkJdPp3tYY6MfhypcPJXCwJFH1_W2eUoSXh06cN3Uk9KJSk0tT04HOPs37Yda2g89tSVBZRkIXBKAy6UL2LRAYlgiIHkMh5Nxv4DbyC5CJWZ0E_9WIvi1yszQYY73d31y6-TDbNR_uREnHaQ6d50cNAsE7PlWJBT5j60AvT2teb1hYoha5txHEPLmmDXLVXJ6uncXNzjzzJN_Ae8-8EgVQw0kYe-1vi5llPnBEOs5JvSWVrMkchO7rQ_YtN2uPy9e-u8VjwlYSRTlBoloWhRtz3WUe3NgenqLMw_decmpSYHVMmeAnmqb9Vl2iTHSZvupb-A4V3EsWdGUlYrK2AHg1iRPzBfEntEGZZ09kLp1DXwYucNeAE8H8MHgeytYmFR2FxAOQUhUN7Dswkq1Vh4LEaL4nOit9aN-n0FYEfW69iHSUmVOzyiy0gyona-_4IsMIj8fR0mxBI_f7-g77emnUmA2zLAx04k2u7uYTwagB7f-vFKI0FxnpKSAXJwoniMzNXh5E1VbiJmcMS-tqm_Wy0zD38fJjbsZvOffHhktanSTfPGjZac9vBGbHnefh9oTv-i0JIj83tZ6cvXbUfoCS6b-HHGTN6s0KN0DSNnJTkMHjlsgIoACWwgixPeTBpH8vMsXP229aMnEjV2umK3pGkEsjPf5avU9u-Aaw8jCXR8RSho8sbOuzUt_8Idq2jXp0Wx-9bu6f-DyDoI_Vo=w1470-h370-no?authuser=1">
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
                        <a href="#" class="fa fa-facebook"></a>
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
