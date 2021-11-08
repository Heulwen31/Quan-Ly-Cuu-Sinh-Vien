<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/info_detail.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <h1>Thông tin học tập cá nhân</h1>

        <div class="line"></div>

        <div class="back-to-view">
            <a href="/admin/info" class="btn-view">Xem thông tin cá nhân</a>
        </div>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Cố vấn học tập</th>
                    <th>GPA</th>
                    <th>CPA</th>
                    <th>Điểm rèn luyện</th>
                    <th>Niên khóa</th>
                    <th>Công cụ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $study_detail->student_id }}</td>
                    <td>{{ $study_detail->consultant }}</td>
                    <td>{{ $study_detail->gpa }}</td>
                    <td>{{ $study_detail->cpa }}</td>
                    <td>{{ $study_detail->point_training }}</td>
                    <td>{{ $study_detail->course }}</td>
                    <td class="tools">
                        <a href="/admin/info/edit/{{$study_detail->student_id}}" class="tools-link tools-link-edit">
                            Sửa <i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>