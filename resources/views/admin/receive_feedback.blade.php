<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Feedback</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/receive_fb.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Phản hồi</a>
    </div>
    
    <div class="wrap">
        <h1>Ý kiến phản hồi</h1>
        <ul class="list">
            @foreach ($contents as $content)
            <li class="list-child">
                <div class="left">
                    <img src="{{ Storage::url( $content->userpath ) }}" class="image">
                    <p>{{ $content->username }}</p>
                </div>
                <h3>{{ $content->title }}</h3>
                <p>{{ $content->content }}</p>
            </li>
            @endforeach
        </ul>
    </div>

    @endsection
</body>
</html>