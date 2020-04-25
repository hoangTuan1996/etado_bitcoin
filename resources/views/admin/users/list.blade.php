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
           @include('admin.users.add')
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
