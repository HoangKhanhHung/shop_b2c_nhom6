@extends('fe.layout')

@section('content')
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
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
        </div>
    </div>
    <!--END BANNER-->
    @if($brands && count($brands->toArray())>0)
        <div class="space-y-5">
            <h3 class="font-bold text-3xl text-center">
{{--                BRAND--}}
            </h3>
            <div>
                <!-- Set up your HTML -->
                <div class="owl-carousel">
                    @foreach($brands as $item)
                        <div class="p-2">
                            <div class="shadow bg-black-200 p-2 h-24 flex items-center justify-center">
                                <img src="{{asset($item->logo_path)}}"
                                     class="object-cover h-26 w-full"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!--MAIN CONTENT-->

    <div class="space-y-10">
        <!--TOP PRODUCT-->
        <div class="space-y-5">
            <h3 class="font-bold text-3xl text-center">FEATURE PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                    All</a>
            </h3>
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                @foreach($featureProducts as $product)
                    @include('fe.components.card-product',['product'=>$product])
                @endforeach
            </div>
        </div>

        <!--NEW ARIVAL PRODUCT-->
        <div class="space-y-5">
            <h3 class="font-bold text-3xl text-center">NEW ARIVAL PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                    All</a>
            </h3>
            <div class="grid md:grid-cols-8 grid-cols-1 gap-10">
                @foreach($newProducts as $product)
                    @include('fe.components.card-product',['product'=>$product])
                @endforeach
            </div>
        </div>


    </div>

    <!--END MAIN CONTENT-->

    <!--NEWSETTLER FORM-->

    <div class="md:grid grid-cols-7 place-items-center p-10" style="background: #DFDFDF">
            <div class="col-span-3">
                <h4 class="font-bold text-3xl">Đăng ký nhận bản tin</h4>
                <p class="font-bold text-base">Đừng bỏ lỡ hàng ngàn sản phẩm và các chương trình siêu hấp dẫn</p>
            </div>
            <div class="col-span-4">
                <form class="flex gap-2 items-center border-2 w-full">
{{--                    <input type="email" class="bg-white h-16 w-48 p-2" required/>--}}
                    <input type="email" class="bg-white h-16 w-48 p-2" placeholder="Nhập email" required>
                    <button class="uppercase text-2xl h-16 font-bold bg-yellow-300 p-2" type="button"  onclick="dieu_huong() ">Đăng Ký</button>
                    <script>
                        function dieu_huong (){
                            location.assign("http://ldp.to/07Vtz");
                        }
                    </script>
                </form>
            </div>
        </div>

    <!--END FORM-->

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 10,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 10
                    }
                }
            });
        });
    </script>

    <script>
        var cont = 0;
        function loopSlider() {
            var xx = setInterval(function () {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;
                        break;
                    }
                    case 1: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");
                        cont = 0;
                        break;
                    }
                }
            }, 8000);
        }
        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }
        function sliderButton1() {
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0
        }
        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1
        }
        $(window).ready(function () {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            loopSlider();
        });
    </script>
@endsection
