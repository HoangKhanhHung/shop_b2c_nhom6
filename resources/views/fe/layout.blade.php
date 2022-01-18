<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('fe/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/owl-carousel/assets/owl.theme.default.min.css')}}">

    <script src="{{asset('fe/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('fe/owl-carousel/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container mx-auto space-y-10">
    <nav class="flex justify-between items-center shadow p-2" style="background: #e8e8e8">
        <div class="text-x space-x-2">
            <i class="bi bi-telephone-fill"></i>
            <a>Liên Hệ: 09 8888 6666</a>
            <i class="bi bi-envelope-fill"></i>
            <a>Email: hotro@gmail.com</a>
        </div>
        <div class="flex items-center gap-7 text-xl" style="margin-right: 30px">
            <a href=""><i class="bi bi-person"></i></a>
            <a href=""><i class="bi bi-cart"></i></a>
        </div>
    </nav>

    <img src="{{asset('fe/img/logoo.jpg')}}" width="500" class="mx-auto"/>

    <nav class="flex justify-between items-center shadow p-3" style="background: #f6f6f6">
        <div class="uppercase font-semibold">
            <ul>
                <li><a href="#" data-text="Home">Trang chủ</a></li>
                <li><a href="#" data-text="About">Sản phẩm</a></li>
                <li><a href="#" data-text="Services">Đồng phục</a></li>
                <li><a href="#" data-text="Team">Thương hiệu</a></li>
                <li><a href="#" data-text="Contact">Bộ sưu tập</a></li>
            </ul>
        </div>

        <div class="flex items-center gap-2">
            <input type="search" class="shadow border border-1 border-gray-400 p-2 w-64"
                   placeholder="search..."/>
        </div>

    </nav>

    <!--BANNER-->
    <div style="margin-top: -50px">
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill">
                    <img src="{{asset("fe/img/a.jpg")}}">
                </div> <!-- container -->
            </div>

            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill">
                    <img src="{{asset("fe/img/tuyj.jpg")}}">
                </div> <!-- container -->
            </div> <!-- container -->
            <br>
        </div>
        <div class="flex justify-between w-12 mx-auto pb-2" style="margin-top: -100px">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
        </div>
    </div>
<!--END BANNER-->

<!--MAIN CONTENT-->

<div class="space-y-10">
    <!--TOP PRODUCT-->
    <div class="space-y-5">
        <h3 class="font-bold text-xl">FEATURE PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                All</a>
        </h3>
        <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
            @for($i=0;$i<8;$i++)
                <div class="shadow">
                    <div class="relative">
                        <img src="{{asset('fe/img/shoes.jpeg')}}" class="object-cover h-64 w-full"/>
                        <a class="absolute top-4 w-10 h-10 text-center rounded shadow right-4 p-2 bg-white">
                            <i class="bi bi-heart"></i>
                        </a>
                    </div>


                    <div class="px-4 py-2">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold text-lg">Product Name</h3>
                            <a class="shadow py-1 px-2 text-center w-10 rounded" style="background: #F2C94C;">
                                <i class="bi bi-cart "></i>
                            </a>
                        </div>
                        <div>
                            <span class="text-gray-400 line-through">300$</span>
                            <span class="text-red-500">300$</span>
                        </div>
                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus,
                            adipisci.</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!--NEW ARIVAL PRODUCT-->
    <div class="space-y-5">
        <h3 class="font-bold text-xl">NEW ARIVAL PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                All</a>
        </h3>
        <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
            @for($i=0;$i<8;$i++)
                <div class="shadow">
                    <div class="relative">
                        <img src="{{asset('fe/img/shoes.jpeg')}}" class="object-cover h-64 w-full"/>
                        <a class="absolute top-4 w-10 h-10 text-center rounded shadow right-4 p-2 bg-white">
                            <i class="bi bi-heart"></i>
                        </a>
                    </div>


                    <div class="px-4 py-2">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold text-lg">Product Name</h3>
                            <a class="shadow py-1 px-2 text-center w-10 rounded" style="background: #F2C94C;">
                                <i class="bi bi-cart "></i>
                            </a>
                        </div>
                        <div>
                            <span class="text-gray-400 line-through">300$</span>
                            <span class="text-red-500">300$</span>
                        </div>
                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus,
                            adipisci.</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>


</div>
<!--END MAIN CONTENT-->

<!--FOOTER-->
<footer>

</footer>
<!--END FOOTER-->
</div>

<script>
    var cont=0;
    function loopSlider(){
        var xx= setInterval(function(){
            switch(cont)
            {
                case 0:{
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-purple-800");
                    $("#sButton2").addClass("bg-purple-800");
                    cont=1;

                    break;
                }
                case 1:
                {

                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");

                    cont=0;

                    break;
                }


            }},8000);

    }

    function reinitLoop(time){
        clearInterval(xx);
        setTimeout(loopSlider(),time);
    }



    function sliderButton1(){

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-purple-800");
        $("#sButton1").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=0

    }

    function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-purple-800");
        $("#sButton2").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=1

    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");


        loopSlider();






    });


</script>
</body>
</html>
