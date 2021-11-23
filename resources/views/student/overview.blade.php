<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/overview.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Tổng quan</a>
    </div>

    <div class="row">
        <a href="/student/info" class="column col-view">
            <p class="content">Thông tin cá nhân</p>
            <i class="fa fa-list-alt col-icon col-icon-view" aria-hidden="true"></i>
        </a>
        <a href="/forumstudent" class="column col-forum">
            <p class="content">Diễn đàn</p>
            <i class="fa fa-users col-icon col-icon-forum" aria-hidden="true"></i>
        </a>
        <a href="/chat" class="column col-chat">
            <p class="content">Chat</p>
            <i class="fa fa-paper-plane col-icon col-icon-chat" aria-hidden="true"></i>
        </a>
        <a href="/feedback" class="column col-feedback">
            <p class="content">Phản hồi</p>
            <i class="fa fa-comments col-icon col-icon-feedback" aria-hidden="true"></i>
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

        list_col[0].onmouseleave = function() {
            list_icon[0].style.transform = "scale(1)"
        }
        list_col[1].onmouseleave = function() {
            list_icon[1].style.transform = "scale(1)"
        }
    </script>
    
    @endsection
</body>
</html>