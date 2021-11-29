<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Donate</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/donate.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Ủng hộ</a>
    </div>

    <div class="wrap">
        <div class="content">
            <img src="{{ url('img/donate.png') }}" class="content-img" alt="">
            <p>Hãy đóng góp cho quỹ theo một trong các phương thức:</p>
            <p>(i) Đóng góp trực tiếp qua bảng kế bên.</p>
            <p>(ii) Chuyển khoản qua số tài khoản ngân hàng 3100205703209.</p>
            <p>Mọi sự đóng góp sẽ được chuyển trực tiếp vào tài khoản của nhà trường.</p>
            <p>Nhà trường trân trọng và cảm ơn sự ủng hộ của bạn.</p>
        </div>

        <form action="adddonate" method="post" class="form">
            @csrf

            <div class="heading">
                <img src="{{ url('img/uet-logo.png') }}" class="heading-img" alt="">
                <h2>Ủng hộ cho nhà trường</h2>
            </div>

            <input type="text" name="money" id="money" class="input money" 
                onclick="click1()" onchange="formatNumber(this)">
            <label for="" class="label label1" id="label1">Số tiền ủng hộ</label>
            <input type="text" name="message" class="input message" onclick="click2()">
            <label for="" class="label label2" id="label2">Lời nhắn</label>

            <div class="wrap-submit">
                <button type="submit" class="submit">Ủng hộ</button>
            </div>
        </form>
    </div>
    
    <script>
        var label1 = document.getElementById("label1");
        var label2 = document.getElementById("label2");
        var money = document.getElementById("money");

        function click1() {
            label1.style.fontSize = "12px";
            label1.style.transform = "translate(-5px, -20px)";
        }

        function click2() {
            label2.style.fontSize = "12px";
            label2.style.transform = "translate(0px, -5px)";
        }

        function formatNumber(num) {
            num.value = num.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        }
    </script>

    @endsection
</body>
</html>