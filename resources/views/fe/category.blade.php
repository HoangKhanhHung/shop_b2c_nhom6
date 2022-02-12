@extends('fe.layout')
@section('content')
    <div style="margin-left:20px; margin-right:20px">
        <h3 class="font-bold text-xl uppercase">{{ $category->name }}</h3>
        </h3>

        @if(!$products->isEmpty())
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                @foreach($products as $product)
                    @include('fe.components.card-product',['product'=>$product])
                @endforeach
            </div>
        @else
            <div class="text-center border border-gray-500 border-dashed rounded p-10 text-xl mt-5
    font-light uppercase flex items-center justify-center h-64">
                This category is empty
            </div>
        @endif
    </div>

    {{--TODO: Pagination--}}
@endsection