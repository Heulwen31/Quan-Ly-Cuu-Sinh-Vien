<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Import Export Excel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .wrap-head{
            position: absolute;
            top: 0;
            left: 16%;
            font-size: 17px;
            padding-top: 12px;
            padding-left: 3px;
            margin-bottom: 16px;
        }

        .wrap-head p{
            color: black;
            display: inline-block;
        }

        .wrap-head span{
            color: rgb(202, 191, 191);
        }

        .wrap-head a{
            color: black;
            text-decoration: none;
            transition: all .3s;
        }

        .wrap-head a:hover{
            text-decoration: none;
            color: rgb(106, 6, 199)
        }

        .active-ie {
            color: #fff !important;
        }

        input{
            cursor: pointer;
        }
    </style>
</head>

<body>
    @extends('home_page')
    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Nhập-Xuất file excel</a>
    </div>

    <div class="container mt-5 text-center">
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Chọn file</label>
                </div>
            </div>
            <button class="btn btn-primary">Nhập dữ liệu</button>
            <a class="btn btn-success" href="{{ route('file-export') }}">Xuất dữ liệu</a>
        </form>
    </div>
    @endsection
</body>

</html>