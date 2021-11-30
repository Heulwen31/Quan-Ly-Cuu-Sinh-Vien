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
        <div>
            <a href="{{ url('index') }}">
                <span class="add-content">Thêm một chủ đề thảo luận mới</span>
            </a>
        </div>
        <div class="subforum">
            <div class="subforum-row">
                <div class="subforum-discuss subforum-column thead">
                    <p>Thảo luận</p>
                </div>
                <div class="subforum-starts subforum-column thead">
                    <p>Bắt đầu bởi</p>
                </div>
            </div>
            @foreach ($contents as $content)
            <div class="subforum-row">
                <a class="subforum-discuss subforum-column center" href="/content/{{$content->id}}">
                    <p>&diams; {{$content->title}}</p>
                </a>
                <div class="subforum-starts subforum-column center">
                    <img class="profile1-image"
                        src="{{ Storage::url( $content->userpath ) }}"
                        alt="">
                    <div class="name">
                        <p>{{$content->username}}</p>
                        <small>{{\Carbon\Carbon::parse($content->time)->format('d-m-Y')}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection
</body>

</html>