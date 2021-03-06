@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.user.doEdit',['id'=>$user->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control"
                                   placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" value="{{$user->full_name}}" class="form-control" minlength="6"
                                   placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{$user->phone}}" class="form-control"
                                   placeholder="Phone" pattern="^\d{10}$"
                            >
                        </div>

                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="admin" <?php if ($user->level == 'admin') {
                                    echo 'selected="selected"';
                                } ?>>Admin
                                </option>
                                <option value="user" <?php if ($user->level == 'user') {
                                    echo 'selected="selected"';
                                } ?>>User
                                </option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   minlength="6" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Vui l??ng bao g???m ??t nh???t 1 k?? t??? vi???t hoa, 1 k?? t??? vi???t th?????ng v?? 1 s???." required>
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
        <li class="breadcrumb-item"><a href="{{route('admin.user.list')}}">User</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('heading')
    User
@endsection
