<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/home_admin.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <h1>Tổng quan</h1>

        <div class="line"></div>
    </div>

    <div class="row">
        <a href="/admin/info/create" class="column col-add">
            <p class="content">Thêm mới thông tin</p>
            <i class="fa fa-plus-square col-icon col-icon-add" aria-hidden="true"></i>
        </a>
        <a href="/admin/info" class="column col-view">
            <p class="content">Xem thông tin</p>
            <i class="fa fa-list-alt col-icon col-icon-view" aria-hidden="true"></i>
        </a>
        <a href="/forum" class="column col-forum">
            <p class="content">Diễn đàn</p>
            <i class="fa fa-users col-icon col-icon-forum" aria-hidden="true"></i>
        </a>
        <a href="/file-import-export" class="column col-excel">
            <p class="content">Nhập/Xuất file excel</p>
            <i class="fa fa-file col-icon col-icon-excel" aria-hidden="true"></i>
        </a>
    </div>

    <script>
        var list_col = document.getElementsByClassName("column");
        var list_icon = document.getElementsByClassName("col-icon");

        list_col[0].onmouseenter = function() {
            list_icon[0].style.transform = "scale(1.1)"
        }
        list_col[1].onmouseenter = function() {
            list_icon[1].style.transform = "scale(1.1)"
        }
        list_col[2].onmouseenter = function() {
            list_icon[2].style.transform = "scale(1.1)"
        }
        list_col[3].onmouseenter = function() {
            list_icon[3].style.transform = "scale(1.1)"
        }

        list_col[0].onmouseleave = function() {
            list_icon[0].style.transform = "scale(1)"
        }
        list_col[1].onmouseleave = function() {
            list_icon[1].style.transform = "scale(1)"
        }
        list_col[2].onmouseleave = function() {
            list_icon[2].style.transform = "scale(1)"
        }
        list_col[3].onmouseleave = function() {
            list_icon[3].style.transform = "scale(1)"
        }
    </script>

    @endsection
</body>
</html>