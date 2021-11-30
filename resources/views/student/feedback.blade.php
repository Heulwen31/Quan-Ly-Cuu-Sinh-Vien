<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Feedback</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/feedback.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Báo cáo</a>
    </div>

    <div class="wrap">
        <form action="addfeedback" method="post" class="form">
            @csrf
            <div class="group-1">
                <label for="" class="label">Chủ đề*</label>
                <input type="text" class="press input" name="title" placeholder="Chủ đề">
            </div>

            <div class="group-2">
                <label for="" class="label">Nội dung*</label>
                <textarea type="text" class="press area" name="content" placeholder="Nội dung"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">Gửi</button>
            </div>
        </form>

        <div class="notification">
            <img src="{{ url('img/report.png') }}" class="image" alt="">
            <p>Nếu có bất kì vấn đề nào, bạn có thể phản hồi cho chúng tôi qua biểu mẫu này. 
                Chúng tôi sẽ tiếp nhận vấn đề và cố gắng sửa chữa sớm nhất có thể.
            </p>
        </div>
    </div>
    
    @endsection
</body>
</html>