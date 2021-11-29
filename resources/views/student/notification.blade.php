<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Notification</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/contact.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Thông báo</a>
    </div>

    <div class="wrap">
        @foreach($contents as $content)
        <h1>{{ $content->title }}</h1>
        <p>{{ $content->content }}</p>
        @endforeach 
    </div>
    
    @endsection
</body>
</html>