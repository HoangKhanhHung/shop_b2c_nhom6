@extends('fe.layout')
@section('content')
    <div class=" text-center border mx-auto md:w-2/3 w-full shadow rounded p-10 space-y-5">
        <h3 class="text-center text-3xl  text-left font-semibold text-green-500">Đặt hàng thành công</h3>
        <p class="text-2xl">Mã đơn hàng của bạn là <span>#{{$orderId}}</span></p>
        <br>
        <button class="uppercase text-white text-2xl h-16 font-bold bg-dark p-2 " type="button"> <a href="/">Tiếp tục mua sắm</a></button>
    </div>
@endsection
