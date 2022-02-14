@extends('fe.layout')
@section('content')

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


    <div>
        <h3 class="font-bold text-3xl text-center uppercase">{{ $category->name }}</h3>
        <br>
        @if(!$products->isEmpty())
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                @foreach($products as $product)
                    @include('fe.components.card-product',['product'=>$product])
                @endforeach
            </div>
            <br>
        @else
            <div class="text-center border border-gray-500 border-dashed rounded p-10 text-xl mt-5
    font-light uppercase flex items-center justify-center h-64">
                This category is empty
            </div>
        @endif
    </div>

    {{--TODO: Pagination--}}
@endsection
@section('script')
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
