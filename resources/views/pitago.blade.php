<form action="/pitago" method="post">
    @csrf
    <div>
        <label> Ngày sinh</label>
        <input type="text" name="date">
    </div>
    <div>
        <label> Tháng sinh</label>
        <input type="text" name="month">
    </div>
    <div>
        <label> Năm sinh</label>
        <input type="text" name="year">
    </div>
    <div>
        <label> Họ và tên</label>
        <input type="text" name="name">
    </div>
    <button type="submit">gửi</button>
</form>
