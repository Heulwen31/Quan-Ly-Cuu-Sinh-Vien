<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Info</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/info.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Thông tin cá nhân</a>
    </div>

    <div class="wrap">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số CCCD</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Công việc</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $row)
                <tr>
                    <td><a href="/student/info/{{$row->id}}" class="link-id">{{ $row->id }}</a></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->cccd }}</td>
                    <td>{{ $row->sex }}</td>
                    <td>{{ $row->birth }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->job }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDel() {
            if (!confirm("Bạn chắc chắn muốn xóa toàn bộ dữ liệu về sinh viên này?")) {
                return false;
            }
        }
    </script>

    @endsection
</body>
</html>