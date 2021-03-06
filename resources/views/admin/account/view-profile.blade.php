@extends('admin.master')
@section('title')
    Thông tin tài khoản cá nhân
@endsection
@section('page-header')
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Thông tin tài khoản cá nhân</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="/">Thông tin tài khoản cá nhân</a></li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Danh sách cộng tác viên</div>
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
                                            <th>STT</th>
                                            <th>UserName</th>
                                            <th>Password</th>
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
                                                <td>1</td>
                                                <td>giangdev</td>
                                                <td>Giangnt_2018@</td>
                                                <td>
                                                    <div class="btn btn-sm btn btn-success">Đăng nhập</div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.usersPinetwork.view') }}" class="btn btn-sm btn-primary" style="float: left; margin-right: 5px"><i class="fa fa-eye"></i></a>
                                                    <div class="dropright dropright"><button type="button"  class="btn btn-sm btn-outline-primary btn-rounded btn-icon"  data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical"></i> </button>
                                                        <ul class="dropdown-menu" x-placement="left-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-162px, 0px, 0px);">
                                                            <li><a class="dropdown-item" href="/">Đăng nhập lại</a></li>
                                                            <li><a class="dropdown-item">Hủy</a></li>
                                                        </ul>
                                                    </div>
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


    <!--modal add-->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Loại tài khoản</label>
                            <select class="form-control" name="user_type">
                                <option value="">Nick chính</option>
                                <option value="">Nick ref</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" placeholder="Số điện thoại" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                        </div>
                        <div class="form-group">
                            <label>Ngày hết hạn</label>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="ti-plus"></i> Thêm tài khoản
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

