<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/contact.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Liên hệ</a>
    </div>
    
    <div class="wrap">
        <form action="/addcontact" method="post">
            @csrf

            <h3>Liên hệ cựu sinh viên</h3>

            <label for="" class="label label1">Mã sinh viên</label>
            <select name="id[]" class="input select" multiple>
                <option value="19021336">19021336</option>
                <option value="19021337">19021337</option>
                <option value="19021338">19021338</option>
                <option value="19021339">19021339</option>
                <option value="19021340">19021340</option>
                <option value="19021341">19021341</option>
                <option value="19021342">19021342</option>
                <option value="19021343">19021343</option>
                <option value="19021344">19021344</option>
                <option value="19021345">19021345</option>
                <option value="19021346">19021346</option>
                <option value="19021347">19021347</option>
                <option value="19021348">19021348</option>
                <option value="19021349">19021349</option>
                <option value="19021350">19021350</option>
                <option value="19021351">19021351</option>
                <option value="19021352">19021352</option>
                <option value="19021353">19021353</option>
                <option value="19021354">19021354</option>
                <option value="19021355">19021355</option>
                <option value="19021356">19021356</option>
                <option value="19021357">19021357</option>
                <option value="19021358">19021358</option>
                <option value="19021359">19021359</option>
                <option value="19021360">19021360</option>
                <option value="19021361">19021361</option>
            </select>
            <label for="" class="label label2">Chủ đề thông báo</label>
            <input type="text" name="title" class="input">
            <label for="" class="label label3">Nội dung thông báo</label>
            <textarea name="content" style="resize: none;"></textarea>
            <button type="submit" class="submit">Gửi</button>
        </form>

        <div class="content">
            <img src="{{ url('img/contact.png') }}" alt="">
            <p>Liên hệ, thông báo với cựu sinh viên bằng biểu mẫu bên.</p>
            <p>Sử dụng Ctrl(Windows) hoặc Command(Mac) để chọn nhiều giá trị.</p>
        </div>
    </div>

    <script>
    </script>

    @endsection
</body>
</html>