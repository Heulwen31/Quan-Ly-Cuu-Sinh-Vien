<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Forum</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/forum.css') }}">
</head>

<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Diễn đàn</a>
    </div>

    <div class="wrap">
        <div class="subforum-title">
            <h1>Diễn đàn trao đổi</h1>
        </div>

        <form id="form" action="add" method="post">
            @csrf

            <label for="">Chủ đề*</label>
            <input class="empty_box" type="text" name="title"> <br>
            <div class="message">
                <label for="">Thông điệp*</label>
                <textarea class="tex" name="content" id=""></textarea> <br>
            </div>
            <button type="submit" class="btn0">Đăng lên diễn đàn</button>
            <a href="/forum">
                <span class="btn1">Hủy bỏ</span>
            </a>
        </form>
    </div>

    @endsection
</body>

</html>