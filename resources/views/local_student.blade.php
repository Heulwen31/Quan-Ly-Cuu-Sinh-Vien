<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Local</title>
    
    <style>
        .wrap-head{
            position: absolute;
            top: 0;
            left: 16%;
            font-size: 17px;
            padding-top: 12px;
            padding-left: 3px;
            margin-bottom: 16px;
            z-index: 1;
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
        
        .wrap{
            margin-top: 40px;
            margin-left: 300px;
        }

        #container {
            margin-top: 20px;
            margin-left: 230px;
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        #container>div {
            margin: 30px;
            border-radius: 10px;
            width: 250px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 30px 250px;
            padding: 20px;
            border: 1px solid #888;
            width: 80% !important;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .active-local{
            color: #fff !important;
        }
    </style>
</head>

<body>
    @extends('student/home_student')
    @section('homestudent')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Kết nối sinh viên cùng khu vực</a>
    </div>

    <div id="container">
        @foreach($contents as $data)
        <div id="hanoi" class="p-3 mb-2 bg-primary text-white">
            <img src="" alt="">
            <h1> {{$data->diadiem}} </h1>
            <p> {{$data->noidung}} </p>
            <a href="{{$data->link}}" class="btn btn-light">Đi tới</a>
        </div>
        @endforeach
    </div>

    @endsection
</body>

</html>