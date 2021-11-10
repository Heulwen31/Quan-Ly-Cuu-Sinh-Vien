<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/info_update.css') }}">
</head>
<body>

    @extends('home_page')

    @section('homepage')

    <h1>Chỉnh sửa thông tin</h1>

    <form method="post" action="/admin/info/update/{{ $student->id }}" class="form">
        @method('PATCH')
        @csrf

        <div class="column1">
            <div class="wrap">
                <label for="id" class="wrap-label">Mã số sinh viên</label>
                <input class="wrap-input" type="text" name="id" value="{{$student->id}}">
            </div>
            
            <div class="wrap">
                <label for="cccd" class="wrap-label">Số CCCD</label>
                <input class="wrap-input" type="text" name="cccd" value="{{$student->cccd}}">
            </div>
            
            <div class="wrap">
                <label for="name" class="wrap-label">Họ tên</label>
                <input class="wrap-input" type="text" name="name" value="{{$student->name}}">
            </div>
            
            <div class="wrap">
                <label for="sex" class="wrap-label">Giới tính</label>
                <input class="wrap-input" type="text" name="sex" value="{{$student->sex}}">
            </div>
            
            <div class="wrap">
                <label for="birth" class="wrap-label">Ngày sinh</label>
                <input class="wrap-input" type="date" name="birth" value="{{$student->birth}}">
            </div>
        </div>
        
        <div class="column2">
            <div class="wrap">
                <label for="email" class="wrap-label">Email</label>
                <input class="wrap-input" type="email" name="email" value="{{$student->email}}">
            </div>
            
            <div class="wrap">
                <label for="phone" class="wrap-label">Số điện thoại</label>
                <input class="wrap-input" type="text" name="phone" value="{{$student->phone}}">
            </div>
            
            <div class="wrap">
                <label for="address" class="wrap-label">Địa chỉ</label>
                <input class="wrap-input" type="text" name="address" value="{{$student->address}}">
            </div>
            
            <div class="wrap">
                <label for="job" class="wrap-label">Công việc</label>
                <input class="wrap-input" type="text" name="job" value="{{$student->job}}">
            </div>
            
            <div class="wrap">
                <label for="consultant" class="wrap-label">Cố vấn học tập</label>
                <input class="wrap-input" type="text" name="consultant" value="{{$study_detail->consultant}}">
            </div>
        </div>
        
        <div class="column3">
            <div class="wrap">
                <label for="cpa" class="wrap-label">Điểm CPA</label>
                <input class="wrap-input" type="text" name="cpa" value="{{$study_detail->cpa}}">
            </div>
            
            <div class="wrap">
                <label for="point_training" class="wrap-label">Điểm rèn luyện</label>
                <input class="wrap-input" type="text" name="point_training" value="{{$study_detail->point_training}}">
            </div>

            <div class="wrap">
                <label for="faculty" class="wrap-label">Khoa</label>
                <input class="wrap-input" type="text" name="faculty" value="{{$study_detail->faculty}}">
            </div>
            
            <div class="wrap">
                <label for="course" class="wrap-label">Niên khóa</label>
                <input class="wrap-input" type="text" name="course" value="{{$study_detail->course}}">
            </div>
        </div>
        
        <div class="wrap-submit">
            <button type="Submit" class="submit">Lưu</button>
        </div>
    </form>
</body>
</html>