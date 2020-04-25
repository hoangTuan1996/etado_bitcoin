@extends('admin.master')
@section('title')
   Chỉnh sửa
@endsection
@section('page-header')
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Danh sách tài khoản</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Danh sách tài khoản</a>
            </li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xs-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Sửa tài khoản
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.users.update',$user->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Tên hiển thị <span style="color: red">*</span></label>
                            <input type="text" name="name" placeholder="Tên hiển thị"
                                   class="form-control @if($errors->has('name')) is-invalid @endif"
                                   value="{{ $user->name }}" required>
                            @error('name')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span style="color: red">*</span></label>
                            <input type="email" name="email" placeholder="Email"
                                   class="form-control @if($errors->has('email')) is-invalid @endif"
                                   value="{{ $user->email }} " required>
                            @error('email')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" placeholder="Mật khẩu"
                                   class="form-control @if($errors->has('password')) is-invalid @endif">
                            @error('password')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại <span style="color: red">*</span></label>
                            <input type="number" name="phone" placeholder="Số điện thoại"
                                   value="{{ $user->phone }}"
                                   class="form-control @if($errors->has('phone')) is-invalid @endif" required>
                            @error('phone')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Giới hạn tài khoản <span style="color: red">*</span></label>
                            <input type="number" name="limit_account" placeholder="Giới hạn tài khoản"
                                   value="{{ $user->limit_account }}"
                                   class="form-control @if($errors->has('limit_account')) is-invalid @endif" required>
                            @error('limit_account')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Ngày sinh</label>
                            <input
                                    class="form-control fc-datepicker hasDatepicker @if($errors->has('birthday')) is-invalid @endif"
                                    placeholder="MM/DD/YYYY" value="{{ $user->birthday }}" type="text" required
                                    name="birthday" id="dateTime">
                            @error('birthday')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="margin-right:10px!important">Trạng thái</label>
                            <input type="checkbox" class="js-switch" @if($user->status == 1) checked
                                   @endif data-color="#5e2dd8" data-size="small"
                                   name="status"/>
                        </div>
                        <div class="form-group">
                            <a href="/admin/users" class="btn btn-danger btn-sm"><i
                                        class="ti-back-right"></i> Trở lại
                            </a>
                            @if(Auth::guard('admin')->user()->can('user-edit'))
                                <button type="submit" class="btn btn-success btn-sm"><i
                                            class="ti-plus"></i> Chỉnh sửa
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
