<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/forum.css') }}">
</head>

<body>

    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <a href="{{ url('index') }}">Thêm chủ đề</a>

        <h1>Cac chu de cua dien dan </h1>
        @foreach ($contents as $content)
        <div>
            <h3> {{$content->title}} </h3>
            <p> {{$content->content}} </p>
        </div>
        @endforeach
    </div>
</body>

</html>