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
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Thông tin cá nhân</a>
    </div>
    
    <div class="wrap">
        <div id="myModal" class="modal">
            <div class="modal-content">
                <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <span class="close">&times;</span>
                    <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                        <div class="custom-file text-left">
                            <input type="file" name="file" class="custom-file-input" id="customFile" onchange='uploadFile(this)'>
                            <label class="custom-file-label" for="customFile" id="file-name">Chọn file</label>
                        </div>
                    </div>
                    <div class="wrap-excel">
                        <button class="btn btn-primary">Nhập dữ liệu <i class="fa fa-file-import"></i></button>
                        <a class="btn btn-success" href="{{ route('file-export') }}">Xuất dữ liệu <i class="fa fa-file-export"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <div class="head-link">
            <a href="info/create" class="btn btn-outline-primary">Thêm thông tin <i class="fa fa-plus-circle"></i></a>
            <button class="btn btn-outline-success" id="myBtn">Nhập/Xuất excel <i class="fa fa-file-excel"></i></button>
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
                            <input type="text" name="searchid" class="input-search search-id" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search2" method="post">
                            @csrf
                            <input type="text" name="searchname" class="input-search search-name" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search3" method="post">
                            @csrf
                            <input type="text" name="searchemail" class="input-search search-email" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search4" method="post">
                            @csrf
                            <input type="text" name="searchsex" class="input-search search-sex" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search5" method="post">
                            @csrf
                            <input type="text" name="searchbirth" class="input-search search-birth" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search6" method="post">
                            @csrf
                            <input type="text" name="searchphone" class="input-search search-phone" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search7" method="post">
                            @csrf
                            <input type="text" name="searchaddress" class="input-search search-address" placeholder="Tìm kiếm">
                        </form>
                    </td>
                    <td>
                        <form action="/search8" method="post">
                            @csrf
                            <input type="text" name="searchjob" class="input-search search-job" placeholder="Tìm kiếm">
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
                            <input class="wrap-input input-birth" id="dt" type="text" name="birth" value="{{\Carbon\Carbon::parse($row->birth)->format('d/m/Y')}}">
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
                        <a href="/admin/info/{{$row->id}}" class="tools-link tools-link-edit">
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
            if (!confirm("Bạn có muốn xóa không?")) {
                return false;
            }
        }

        function updateInfo() {
            alert("Thay đổi dữ liệu thành công!");
        }

        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function uploadFile(target) {
            document.getElementById("file-name").innerHTML = target.files[0].name;
        }
    </script>

    @endsection
</body>
</html>