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
            <h2>{{ $contents->title }}</h2>
        </div>

        <div class="forum1 center">
            <img class="profile1-image"
                src="{{ Storage::url( $contents->userpath ) }}"
                alt="">
            <div class="name">
                <p>{{ $contents->title }}</p>
                <small>bởi  </small>{{ $contents->username }} vào ngày  <small>{{ $contents->time }}</small>
            </div>
        </div>
        <div class="nd">
            <p>{{ $contents->content }}</p>
        </div>
        <div class="back_Home1">
            <a href="/forum">
                <span class="icon"><i class="fas fa-arrow-left"></i></span>
                <span class="title1">Trở về</span>
            </a>
        </div>
    </div>

    @endsection
</body>

</html>