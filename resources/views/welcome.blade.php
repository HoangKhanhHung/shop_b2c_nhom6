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
    <title>Thời trang Nam</title>
    <style>

        header .header-top{
            background: #000;
            height: 40px;
            line-height: 40px;
            position: relative;
            padding: 0px;
        }

        .dropdown-content {
            font-family: "Century Gothic";
        }
        #content{
            font-family:"Segoe UI";
        }
        .single-item img {
            width: 320px;
            height: 320px;
            object-fit: cover !important;
        }
        .ribbon-wrapper {
            width: 85px;
            height: 88px;
            overflow: hidden;
            position: absolute;
            top: -3px;
            right: -3px;
        }
        .ribbon {
            font: bold 15px Sans-Serif;
            color: #DDDDDD;
            text-align: center;
            text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
            -webkit-transform: rotate(45deg);
            -moz-transform:    rotate(45deg);
            -ms-transform:     rotate(45deg);
            -o-transform:      rotate(45deg);
            position: relative;
            padding: 7px 0;
            left: -5px;
            top: 15px;
            width: 120px;
            background-color: #DDDDDD;
            color: #4F4F4F;
            -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
            -moz-box-shadow:    0px 0px 3px rgba(0,0,0,0.3);
            box-shadow:         0px 0px 3px rgba(0,0,0,0.3);
        }
        .ribbon:before, .ribbon:after {
            content: "";
            border-top:   5px solid #DDDDDD;
            border-left:  5px solid #DDDDDD;
            border-right: 5px solid #DDDDDD;
            position:absolute;
            bottom: -3px;
        }
        .ribbon:before {
            left: 0;
        }
        .ribbon:after {
            right: 0;
        }
    </style>
</head>

<body>
<div class="head">
    <div class="head__top">
        <div class="service-header">

                    <span class="contact">
                        <span class="glyphicon glyphicon-earphone"></span>
                        <span class="header-top"></span>
                        <span>Customer Service: 0989018138</span>
                    </span>

            <span class="email">
                        <span class="fas fa-envelope"></span>
                        <span>Email: thuann.nguyenn99@gmail.com</span>
                    </span>
            <div class="header-icons">
                &nbsp &nbsp &nbsp
                @if(Auth::check())
                    <span class=" dropdown">
                        <a  href=""><span class="header-icon dropdown animate-dropdown "><i class="far fa-user"> <span style="font-family:'Century Gothic';font-size:15px;">&nbsp  {{Auth::user()->username}}</span></i></a>
                            <div class="dropdown-content " style="font-size: 15px;">
                                <a href="#">Quản lí sản phẩm</a>
                                <a href="#">Quản lí đơn hàng</a>
                                <a href="#" data-toggle="tooltip" title="Log out"><i class="glyphicon glyphicon-log-out"></i>&nbsp Log Out</a>
                            </div>
                        </span>
                @else
                    <span class="header-icon dropdown animate-dropdown">
                            <a href="#" target="_parent">
                                <i class="far fa-user"></i>
                            </a>
                        </span>
                @endif
                &nbsp &nbsp &nbsp
                <span class="header-icon dropdown animate-dropdown" >
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>
                            </a><span class="badge badge-light"></span>
                        </span>
            </div>
        </div>
    </div>
    <a href="#"><div class="head__logo" align=center>THT</div></a>
</div>
<div class="head__nav">
    <div class="navbar-default" id ='navbar'>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="nav__left">
                        <ul class ="navigation-desktop-menu">
                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="#" class='dropbtn'>MAKEUP</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <div class="row makeup">
                                                <div class="col-md-4">
                                                    <h5><strong>LIPSTICK</strong></h5>
                                                    <a href="{{route('lips')}}">Son</a>
                                                    <a href="#">Son dưỡng - Tẩy da chết</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5><strong>FACE MAKEUP</strong></h5>
                                                    <a href="#">Kem nền - Kem lót - Kem che khuyết điểm</a>
                                                    <a href="#">Phấn phủ - Phấn nén</a>
                                                    <a href="#">Blusher</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5><strong>EYE MAKEUP</strong></h5>
                                                    <a href="#">Lông mày</a>
                                                    <a href="#">Mascara</a>
                                                    <a href="#">Phấn mắt</a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <div class="col-md-4">
                                        <a href="#" class='dropbtn'>SKINCARE</a>
                                        <h5><strong>Phu Kien</strong></h5>
                                        <a href="#">Long may</a>
                                        <a href="#">Mascara</a>
                                        <a href="#">Phan mat</a>

                                    </div>
                                    <div class="col-md-4">
                                        <h5><strong>Sua Rua mat</strong></h5>
                                        <a href="#">Nuoc Tay Trang</a>
                                        <a href="#">Tay Te bao chet</a>
                                        <a href="#">Sua rua mat</a>
                                    </div>
                                </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="#" class='dropbtn'>HAIR</a>
                                    <ul>
                                        <div class="col-md-5">
                                            <h5><strong>Thuoc nhom toc</strong></h5>
                                            <a href="#">Lông mày</a>
                                            <a href="#">Mascara</a>
                                            <a href="#">Phấn mắt</a>
                                        <div class="dropdown-content">
                                            <a href="#">Sản phẩm nhuộm</a>
                                            <a href="#">Ủ tóc</a>
                                            <a href="#">Dầu gội & Dầu xả</a>
                                        </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href="#" class='dropbtn'>BATH & BODY</a>
                                    <ul>
                                        <div class="dropdown-content">
                                            <a href="#">Sữa tắm</a>
                                            <a href="#">Sữa dưỡng thể</a>
                                            <a href="#">Bath bomb</a>
                                        </div>
                                    </ul>
                                </div>
                            </li>

                            <li class='navigation-tab'>
                                <div class="dropdown">
                                    <a href=" #" class='dropbtn'>FUNCTIONAL FOODS</a>
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

</body>
</html>
<!-- <script src="{{ asset('js/test.js') }}"></script> -->
