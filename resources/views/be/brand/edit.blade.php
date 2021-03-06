@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="{{route('admin.brand.doEdit',['id'=>$brand->id])}}">
                    @csrf
                    <div class="card-body">

                        @if($brand->logo_path)
                            <img width="200" src="{{asset($brand->logo_path)}}"/>
                        @endif

                        <div class="form-group">
                            <label for="exampleInputFile">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="logo" class="images-input custom-file-input"
                                           id="exampleInputFile" >
                                    <label class="custom-file-label" for="exampleInputFile">Choose Logo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$brand->name}}"
                                   placeholder="Enter name"  required>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.brand.list')}}">Brand</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection


@section('heading')
    Brand
@endsection
