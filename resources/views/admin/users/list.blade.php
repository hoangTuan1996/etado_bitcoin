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
                    <form method="post" action="{{route('admin.users.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Tên hiển thị</label>
                            <input type="text" name="name" placeholder="" class="form-control">
                            @error('name')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="Email" name="email" placeholder="" class="form-control">
                            @error('email')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" placeholder="" class="form-control">
                            @error('password')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" placeholder="" class="form-control">
                            @error('phone')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số lượng tài được thêm</label>
                            <input type="number" name="limit_account" placeholder="" class="form-control">
                            @error('limit_account')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input
                                    class="form-control fc-datepicker hasDatepicker @if($errors->has('birthday')) is-invalid @endif"
                                    placeholder="MM/DD/YYYY" value="{{ old('birthday') }}" type="text" required
                                    name="birthday" id="dateTime">
                            @error('birthday')
                            <strong style="color: red">{{ $message }}</strong>
                            @enderror
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
                                        {{--@for($i=1;$i<=5;$i++)--}}
                                            {{--<tr>--}}
                                                {{--<td>--}}
                                                    {{--<div class="custom-controls-stacked">--}}
                                                        {{--<label class="custom-control custom-checkbox">--}}
                                                            {{--<input type="checkbox" class="custom-control-input"--}}
                                                                   {{--name="example-checkbox1">--}}
                                                            {{--<span class="custom-control-label"></span>--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                                {{--<td>nguyentuyengiangbn@gmail.com</td>--}}
                                                {{--<td>Tuyển Giảng</td>--}}
                                                {{--<td>0965565742</td>--}}
                                                {{--<td>--}}
                                                    {{--<div class="btn btn-sm btn btn-success">Đang hoạt động</div>--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--<a href="javascript:void(0)" data-id=""--}}
                                                       {{--class="user-btn-edit btn btn-sm btn-primary"><i--}}
                                                                {{--class="ti-pencil"></i></a>--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                        {{--@endfor--}}
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
@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#DataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.users.data') !!}',
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
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
                                url: "{{ route('admin.users.delMulti')}}",
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
