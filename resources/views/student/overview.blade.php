<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/overview.css') }}">
</head>
<body>
    @extends('student/home_student')

    @section('homestudent')

    <div class="wrap">
        <h1>Tổng quan</h1>

        <div class="line"></div>
    </div>

    <div class="row">
        <a href="/student/info" class="column col-view">
            <p class="content">Xem thông tin</p>
            <i class="fa fa-list-alt col-icon col-icon-view" aria-hidden="true"></i>
        </a>
        <a href="/forumstudent" class="column col-forum">
            <p class="content">Diễn đàn</p>
            <i class="fa fa-users col-icon col-icon-forum" aria-hidden="true"></i>
        </a>
    </div>

    <script>
        var list_col = document.getElementsByClassName("column");
        var list_icon = document.getElementsByClassName("col-icon");

        list_col[0].onmouseenter = function() {
            list_icon[0].style.transform = "scale(1.1)"
        }
        list_col[1].onmouseenter = function() {
            list_icon[1].style.transform = "scale(1.1)"
        }

        list_col[0].onmouseleave = function() {
            list_icon[0].style.transform = "scale(1)"
        }
        list_col[1].onmouseleave = function() {
            list_icon[1].style.transform = "scale(1)"
        }
    </script>
    
    @endsection
</body>
</html>