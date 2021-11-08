<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/info.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <h1>Thông tin cá nhân</h1>

        <div class="line"></div>

        <div class="add">
            <a href="/admin/info/create" class="tools-link tools-link-add">
                Thêm thông tin <i class="fa fa-plus-square"></i></a>
        </div>

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
                    <th>Công cụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $row)
                <tr>
                    <td><a href="/admin/info/{{$row->id}}" class="link-id">{{ $row->id }}</a></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->cccd }}</td>
                    <td>{{ $row->sex }}</td>
                    <td>{{ $row->birth }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->job }}</td>
                    <td class="tools">
                        <a href="/admin/info/edit/{{$row->id}}" class="tools-link tools-link-edit">
                            Sửa <i class="fa fa-edit"></i></a>
                        <form method="POST" action="/admin/info/delete/{{$row->id}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirmDel();" class="tools-link tools-link-delete">
                                Xóa <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
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
</body>
</html>