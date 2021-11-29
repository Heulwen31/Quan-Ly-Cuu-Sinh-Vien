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

            <label for="">Mã sinh viên</label>
            <input type="text" name="id">
            <label for="">Chủ đề</label>
            <input type="text" name="title">
            <label for="">Nội dung</label>
            <textarea cols="30" rows="10" name="content"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
    </script>

    @endsection
</body>
</html>