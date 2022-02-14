@php
    $categories = \App\Models\Category::all();
@endphp

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
{{--    <a class="navbar-brand" href="/">Navbar</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

    <div class="collapse navbar-collapse font-semibold uppercase" id="navbarSupportedContent" style="margin-left: 20px">
        <ul class="navbar-nav mr-auto">
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--            </li>--}}
            <li class="navbar-brand">
                <a class="nav-link inline-block text-white text-2xl" href="/"><i
                        class="bi bi-house"></i></a>
                @foreach($categories as $cat)
                    <a class="nav-link inline-block text-white"
                    <?php if (Request::segment(2) == $cat->id) {
                        echo "bg-white";
                    } else {
                        echo "text-white";
                    } ?>"
                    href="{{route('fe.category',['id'=>$cat->id])}}">{{$cat->name}}</a>
                @endforeach

            </li>
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    Dropdown--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="#">Action</a>--}}
{{--                    <a class="dropdown-item" href="#">Another action</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link disabled" href="#">Disabled</a>--}}
{{--            </li>--}}
        </ul>
        <form action="{{route('fe.search')}}" class="form-inline my-2 my-lg-0">
            <a class="relative px-1 py-2 text-white inline-block h-full text-2xl" href="{{route('fe.user.my-orders')}}">
                <i class="bi bi-person"></i></a>
            <a href="{{route('fe.cart')}}"
               class="relative px-4 py-1 text-white inline-block h-full text-2xl">
                <i class="bi bi-cart"></i>
                <div id="total-item-in-cart" class="absolute w-5 h-5
                bottom-5 right-1
                text-xs
                flex justify-center items-center
                rounded-full bg-white text-black">0
                </div>
            </a>
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
{{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        </form>
    </div>
</nav>


{{--
<nav class="flex justify-between items-center shadow" style="background: #e8e8e8">
    <div class="text-x space-x-2" style="margin-left:20px">
        <i class="bi bi-telephone-fill"></i>
        <a>Liên Hệ: 09 8888 6666</a>
        <i class="bi bi-envelope-fill"></i>
        <a>Email: hotro@gmail.com</a>
    </div>
    <div class="flex items-center gap-2" style="margin-right:20px">
        <div class="text-xl">
            <a class="hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full" href="">
                <i class="bi bi-heart"></i></a>
            <a class="hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full" href="">
                <i class="bi bi-person"></i></a>
            <a href="{{route('fe.cart')}}"
               class="relative hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full">
                <i class="bi bi-cart"></i>
                <div id="total-item-in-cart" class="absolute w-5 h-5
                bottom-5 right-1
                text-xs
                flex justify-center items-center
                rounded-full bg-blue-500 text-white">0
                </div>
            </a>
        </div>
    </div>
</nav>
--}}
