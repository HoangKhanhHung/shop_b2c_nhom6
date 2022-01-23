

<nav class="flex justify-between items-center shadow" style="background: #e8e8e8">
    <div class="text-x space-x-2" style="margin-left:20px">
        <i class="bi bi-telephone-fill"></i>
        <a>Liên Hệ: 09 8888 6666</a>
        <i class="bi bi-envelope-fill"></i>
        <a>Email: hotro@gmail.com</a>
    </div>
    <div class="flex items-center gap-2"  style="margin-right:20px">
    <div class="text-xl">
        <a class="hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full" href="">
            <i class="bi bi-heart"></i></a>
        <a class="hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full" href="">
            <i class="bi bi-person"></i></a>
        <a href="{{route('fe.cart')}}" class="relative hover:bg-black hover:text-white px-4 py-2 text-black inline-block h-full">
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
