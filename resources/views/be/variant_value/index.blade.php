@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Value</th>
                            <th>Variant</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->value}}</td>
                                <td>
                                    @if($item->variant)
                                        <span class="badge badge-primary">
                                        {{$item->variant->name}}
                                           </span>

                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.variant_value.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.variant_value.delete',['id'=>$item->id])}}"
                                       onclick="return confirm('Are you you want to delete this ?')" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$list->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.variant_value.list')}}">Variant Value</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection


@section('heading')
    Variant Value
@endsection
