<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/contact.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Liên hệ</a>
    </div>
    
    <div class="wrap">
        <form action="/addcontact" method="post">
            @csrf

            <h3>Liên hệ cựu sinh viên</h3>

            <label for="" class="label label1">Mã sinh viên</label>
            <input type="text" name="id" class="input" autocomplete="off">
            <label for="" class="label label2">Chủ đề thông báo</label>
            <input type="text" name="title" class="input">
            <label for="" class="label label3">Nội dung thông báo</label>
            <textarea name="content" style="resize: none;"></textarea>
            <button type="submit" class="submit">Gửi</button>
        </form>

        <div class="content">
            <img src="{{ url('img/contact.png') }}" alt="">
            <p>Liên hệ, thông báo với cựu sinh viên bằng biểu mẫu bên.</p>
        </div>
    </div>

    <script>
    </script>

    @endsection
</body>
</html>