<div class="row">
    <div class="col-12">
        <label>Ngày sinh: {{$data['date']}}/{{$data['month']}}/{{$data['year']}}</label>
        <label>Họ và tên: {{$data['name']}}</label>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <label>Vận hạnh</label>
        <p>{{$data['van_hanh']}}</p>
    </div>
    <div class="col-12">
        <label>Thái độ</label>
        <p>{{$data['thai_do']}}</p>
    </div>
    <div class="col-12">
        <label>Đường đời kiểu 1</label>
        <p>{{$data['duong_doi']}}</p>
    </div>
    <div class="col-12">
        <label>Đường đời kiểu 2</label>
        <p>{{$data['duong_doi_kieu_2']}}</p>
    </div>
    <div class="col-12">
        <label>Tên riêng</label>
        <p>{{$data['ten']}}</p>
    </div>
    <div class="col-12">
        <label>Linh hồn</label>
        <p>{{$data['linh_hon']}}</p>
    </div>
    <div class="col-12">
        <label>Nhân cách</label>
        <p>{{$data['nhan_cach']}}</p>
    </div>
</div>

<table class="table" style="border: 1px solid #dddddd">
    <thead>
    <tr style="border: 1px solid #dddddd">
        <th></th>
        <th>M_1</th>
        <th>M_2</th>
        <th>M_3</th>
        <th>M_4</th>
        <th>M_5</th>
        <th>M_6</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>M:</td>
        <td>{{ $data['M_1'] }}</td>
        <td>{{ $data['thai_do'] }}</td>
        <td>{{ $data['M_3'] }}</td>
        <td>{{ $data['M_4'] }}</td>
        <td>{{ $data['M_5'] }}</td>
        <td>{{ $data['M_5'] }}</td>
    </tr>
    <tr>
        <td>m:</td>
        <td>{{ $data['m_1'] }}</td>
        <td>{{ $data['m_2'] }}</td>
        <td>{{ $data['m_2'] + 9 }}</td>
        <td>{{ $data['m_2'] + 9 + 9 }}</td>
        <td>{{ $data['m_2'] + 9 + 9 + 9 }}</td>
        <td>{{ $data['m_2'] + 9 + 9 + 9 + 9 }}</td>
    </tr>
    <tr>
        <td>Số tuổi:</td>
        <td>{{ $data['tuoi_m_1'] }}</td>
        <td>{{ $data['tuoi_m_2'] }}</td>
        <td>{{ $data['tuoi_m_2'] + 9 }}</td>
        <td>{{ $data['tuoi_m_2'] + 9 + 9 }}</td>
        <td>{{ $data['tuoi_m_2'] + 9 + 9 + 9}}</td>
        <td>{{ $data['tuoi_m_2'] + 9 + 9 + 9 + 9}}</td>
    </tr>
    </tbody>
</table>

<style>
    table tbody tr td {
        border: 1px solid red;
        text-align: center;
    }
    table thead th {
        border: 1px solid #000000;
    }
</style>

<a href="pitago"><button>Trợ lại</button></a>