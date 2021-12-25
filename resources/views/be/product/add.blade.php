@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.product.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="preview-images">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images" multiple class="images-input custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <option value="0">All</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" placeholder="Enter Content"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter Price">
                        </div>

                        <div>
                            <label>Brand</label>
                            <select name="brand_id" class="form-control">
                                <option></option>
                            </select>
                        </div>

                        <div>
                            <label>Discount Type</label>
                            <select class="form-control">
                                <option value="1">Percentage</option>
                                <option value="2">Direct Amount</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Meta Content</label>
                            <input type="text" name="meta_content" class="form-control"
                                   placeholder="Enter Meta Content">
                        </div>

                        <div class="form-group">
                            <label>Meta Content</label>
                            <input type="text" name="meta_description" class="form-control"
                                   placeholder="Enter Meta Description">
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control"></textarea>
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
        <li class="breadcrumb-item"><a href="{{route('admin.product.list')}}">Product</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection

@section('script')
    <style>
        .preview-images {
            display: flex;
            justify-content: flex-start;
            gap: 5px
        }

        .preview-images img {
            width: 150px;
            height: 100px;
        }
    </style>
    <script>
        const imagesPreview = function (input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('.images-input').on('change', function () {
            imagesPreview(this, '.preview-images');
        });
    </script>
@endsection
