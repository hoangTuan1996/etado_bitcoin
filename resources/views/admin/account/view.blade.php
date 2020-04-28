@extends('admin.master')
@section('title')
    Danh sách tài khoản cá nhân
@endsection
@section('page-header')
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Danh sách tài khoản cá nhân</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="/">Danh sách tài khoản cá nhân</a></li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-lg-end">
                        <div class="col-md-3 text-right">
                            <a href="/" class="btn btn-default btnMargin"><i class="ti-filter"></i></a>
                            @if(count($accounts) < $admin->limit_account )
                                <button type="button" class="btn btn-primary btnMargin" data-toggle="modal"
                                        data-target="#addUser"><i
                                            class="ti-plus"></i>
                                </button>
                            @endif
                            <button class="btn waves-effect waves-light btn-outline-secondary btnMargin">
                                Tài khoản đã tạo
                                @if (Auth::guard('admin')->user()->can('admin'))
                                    <b>{{count($accounts)}}</b>
                                @else
                                    <b>{{count($accounts)}}/{{$admin->limit_account}}</b>
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xs-12">
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
                                            <th>STT</th>
                                            <th>Loại tài khoản</th>
                                            <th>Số điện thoại</th>
                                            <th>UserName</th>
                                            <th>Đăng nhập lần cuối</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
                                            <td>Nick Chính</td>
                                            <td>0965565742</td>
                                            <td>giangdev</td>
                                            <td>
                                                <div class="btn btn-sm btn btn-success">Đăng nhập</div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.usersPinetwork.view') }}"
                                                   class="btn btn-sm btn-primary"
                                                   style="float: left; margin-right: 5px"><i class="fa fa-eye"></i></a>
                                                <div class="dropright dropright" style="float: left;">
                                                    <button type="button"
                                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i></button>
                                                    <ul class="dropdown-menu" x-placement="left-start"
                                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-162px, 0px, 0px);">
                                                        <li><a class="dropdown-item" href="/" data-toggle="modal"
                                                               data-target="#loginModal">Đăng nhập lại</a></li>
                                                        <li><a class="dropdown-item">Hủy</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
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

    @include('admin.account.add')

    <!--modal add-->
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đăng nhập lại</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="ti-lock"></i> Đăng nhập lại
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#DataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.accounts.data') !!}',
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
                    {data: 'id', name: 'id'},
                    {data: 'type_account', name: 'type_account'},
                    {data: 'phone', name: 'phone'},
                    {data: 'name', name: 'name'},
                    {data: 'time', name: 'time'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });

        //delete multi
        jQuery(document).ready(function ($) {
            $('#btnDelete').click(function () {
                var deletePost = $('#deleteSelect').val();
                var id = [];
                $('.idDelete:checked').each(function () {
                    id.push($(this).val());
                });
                if (deletePost == "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        text: 'Bạn chưa chọn hành động nào !!!',
                    })
                } else {
                    Swal.fire({
                        title: 'Bạn có muốn xóa không?',
                        type: 'warning',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Xóa'
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': '{{ @csrf_token() }}'
                                },
                                type: "delete",
                                url: "{{ route('admin.accounts.delMulti')}}",
                                data: {
                                    _token: '{{ @csrf_token() }}',
                                    id: id
                                },
                                success: function (data) {
                                    if (data.success) {
                                        swal.fire({
                                            title: data.message,
                                            type: "success",
                                            icon: 'success',
                                            timer: 1500
                                        }).then(function () {
                                            location.reload();
                                        });
                                    } else {
                                        swal.fire({
                                            title: 'Lỗi...',
                                            type: 'error',
                                            timer: '1500'
                                        })
                                    }
                                }
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection