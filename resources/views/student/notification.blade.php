<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Notification</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/notification.css') }}">
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
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-bell"></i>
            </div>
            <div class="content">
                <h3>{{ $content->title }}</h3>
                <p>{{ $content->content }}</p>
                <form method="POST" action="/contact/delete/{{$content->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" onclick="return confirmDel();" class="link">
                        <i class="fa fa-times"></i></button>
                </form>
            </div>
        </div>
        @endforeach 
    </div>
    
    @endsection
</body>
</html>