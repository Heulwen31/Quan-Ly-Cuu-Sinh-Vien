<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Local</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/notification.css') }}">
    <style>
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
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
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
    </style>
</head>

<body>
    @extends('home_page')
    @section('homepage')
    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Kết nối sinh viên cùng khu vực</a>
    </div>
    <button class="btn btn-secondary" style="margin-left: 250px; margin-top: 45px;" id="myBtn">Thêm nhóm</button>


    <div id="container">
        @foreach($contents as $data)
        <div id="hanoi" class="p-3 mb-2 bg-primary text-white">
            <a href="delete/{{$data->id}}" class="btn bg-primary" style="float: right;" >&times;</a>
            <img src="" alt="">
            <h1> {{$data->diadiem}} </h1>
            <p> {{$data->noidung}} </p>
            <a href="{{$data->link}}" class="btn btn-light">Đi tới</a>
        </div>
        @endforeach
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <form method="post" action="/localcreate" id="form">
                @csrf
                <span class="close">&times;</span>
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tieude">
                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">Nội dung</label>
                    <input type="text" class="form-control" id="exampleInputContent" name="noidung">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLink" class="form-label">Đường dẫn tới nhóm</label>
                    <input type="url" class="form-control" id="exampleInputPassword1" name="link">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="diadiem">
                        <option selected>Địa điểm</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Bạn muốn tạo nhóm?</label>
                </div>
                <button type="submit" class="btn btn-primary">Tạo nhóm</button>
            </form>
        </div>

    </div>

    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    @endsection
</body>

</html>