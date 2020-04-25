
<!--modal add-->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.accounts.store')}}" method="post">
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
                        <select class="form-control" name="type">
                            <option value="{{config('model.account.primary')}}">Nick chính</option>
                            <option value="{{config('model.account.ref')}}">Nick ref</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="number" class="form-control" placeholder="Số điện thoại" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="name">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
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
