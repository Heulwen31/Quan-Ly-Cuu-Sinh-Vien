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

        <div class="add clearfix">
            <a href="/admin/info/create" class="tools-link tools-link-add head-link">
                Thêm thông tin <i class="fa fa-plus-square"></i></a>
            <a href="/file-import-export" class="tools-link tools-link-add excel head-link">
                Nhập/Xuất file excel</a>
        </div>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Công việc</th>
                    <th>Công cụ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <form action="/search1" method="post">
                            @csrf
                            <input type="text" name="searchid" class="input-search search-id">
                        </form>
                    </td>
                    <td>
                        <form action="/search2" method="post">
                            @csrf
                            <input type="text" name="searchname" class="input-search search-name">
                        </form>
                    </td>
                    <td>
                        <form action="/search3" method="post">
                            @csrf
                            <input type="text" name="searchemail" class="input-search search-email">
                        </form>
                    </td>
                    <td>
                        <form action="/search4" method="post">
                            @csrf
                            <input type="text" name="searchsex" class="input-search search-sex">
                        </form>
                    </td>
                    <td>
                        <form action="/search5" method="post">
                            @csrf
                            <input type="text" name="searchbirth" class="input-search search-birth">
                        </form>
                    </td>
                    <td>
                        <form action="/search6" method="post">
                            @csrf
                            <input type="text" name="searchphone" class="input-search search-phone">
                        </form>
                    </td>
                    <td>
                        <form action="/search7" method="post">
                            @csrf
                            <input type="text" name="searchaddress" class="input-search search-address">
                        </form>
                    </td>
                    <td>
                        <form action="/search8" method="post">
                            @csrf
                            <input type="text" name="searchjob" class="input-search search-job">
                        </form>
                    </td>
                    <td></td>
                </tr>
                @foreach($student as $row)
                <tr>
                    <td>
                        <form method="post" action="/admin/info/update1/{{ $row->id }}" class="form" id="form-id" onsubmit="updateInfo()">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-id" type="text" name="id" value="{{$row->id}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update2/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-name" type="text" name="name" value="{{$row->name}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update3/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-email" type="text" name="email" value="{{$row->email}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update4/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-sex" type="text" name="sex" value="{{$row->sex}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update5/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-birth" id="dt" type="text" name="birth" value="{{$row->birth}}" onchange="mydate();">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update6/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-phone" type="text" name="phone" value="{{$row->phone}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update7/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-address" type="text" name="address" value="{{$row->address}}">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/admin/info/update8/{{ $row->id }}" class="form" onsubmit="updateInfo();">
                            @method('PATCH')
                            @csrf
                            <input class="wrap-input input-job" type="text" name="job" value="{{$row->job}}">
                        </form>
                    </td>
                    <td class="tools">
                        <a href="" class="tools-link tools-link-edit">
                            Chi tiết <i class="fa fa-edit"></i></a>
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

        function updateInfo() {
            alert("Thay đổi dữ liệu thành công!");
        }

        function mydate() {
            // d = new Date(document.getElementById("dt").value);
            // dt = d.getDate();
            // mn = d.getMonth();
            // mn++;
            // yy = d.getFullYear();
            // document.getElementById("ndt").value = dt + "/" + mn + "/" + yy
            // document.getElementById("ndt").hidden = false;
            // document.getElementById("dt").hidden = true;
            var d = document.getElementById("dt");
            dt.value="Hello";
        }
    </script>

    @endsection
</body>
</html>