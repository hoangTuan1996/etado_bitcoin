<div class="card">
    <div class="card-header">
        <div class="card-title">Thêm người dùng mới</div>
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
                <label>Số lượng tài khoản</label>
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
                <button type="submit" class="btn btn-success btn-sm"><i class="ti-plus"></i> Thêm người dùng
                </button>
            </div>
        </form>
    </div>
</div>