@extends('admin.master')
@section('title')
    Danh sách tài khoản
@endsection
@section('page-header')
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Danh sách tài khoản</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="/">Danh sách tài khoản</a></li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-lg-5 col-md-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Thêm tài khoản mới</div>
                </div>
                <div class="card-body">
                    <form method="">
                        @csrf
                        <div class="form-group">
                            <label>Tên hiển thị</label>
                            <input type="text" name="username" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="Email" name="email" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input
                                class="form-control fc-datepicker hasDatepicker @if($errors->has('birthday')) is-invalid @endif"
                                placeholder="MM/DD/YYYY" value="{{ old('birthday') }}" type="text" required
                                name="birthday" id="dateTime">
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <input type="checkbox" checked class="js-switch" data-color="#5e2dd8" data-size="small"
                                   name="status"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"><i class="ti-plus"></i> Thêm tài khoản
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-7 col-xs-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Danh sách tài khoản</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="DataTable"
                                           class="table table-striped table-bordered text-nowrap w-100 dataTable no-footer"
                                           role="grid" aria-describedby="example_info">
                                        <thead>
                                        <tr role="row">
                                            <th>
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               onclick="toggle(this);" name="example-checkbox1">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>Email</th>
                                            <th>Tên hiển thị</th>
                                            <th>Số điện thoại</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=1;$i<=5;$i++)
                                            <tr>
                                                <td>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   name="example-checkbox1">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>nguyentuyengiangbn@gmail.com</td>
                                                <td>Tuyển Giảng</td>
                                                <td>0965565742</td>
                                                <td>
                                                    <div class="btn btn-sm btn btn-success">Đang hoạt động</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id=""
                                                       class="user-btn-edit btn btn-sm btn-primary"><i
                                                            class="ti-pencil"></i></a>
                                                </td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

