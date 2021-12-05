<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/home_admin.css') }}">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="/home">Tổng quan</a>
    </div>

    <div class="row">
        <a href="/admin/info" class="column col-view">
            <p class="content">Thông tin cựu sinh viên</p>
            <i class="fa fa-list-alt col-icon col-icon-view" aria-hidden="true"></i>
        </a>
        <a href="/forum" class="column col-forum">
            <p class="content">Diễn đàn</p>
            <i class="fa fa-users col-icon col-icon-forum" aria-hidden="true"></i>
        </a>
        <a href="/admin/chat" class="column col-chat">
            <p class="content">Chat</p>
            <i class="fa fa-paper-plane col-icon col-icon-chat" aria-hidden="true"></i>
        </a>
        <a href="/chart" class="column col-statis">
            <p class="content">Thống kê</p>
            <i class="fa fa-chart-bar col-icon col-icon-statis" aria-hidden="true"></i>
        </a>
    </div>

    <div class="row row2">
        <a href="/local" class="column col-local">
            <p class="content">Kết nối cựu sinh viên</p>
            <i class="fa fa-map-marked-alt col-icon col-icon-local" aria-hidden="true"></i>
        </a>
        <a href="/receive-fb" class="column col-feedback">
            <p class="content">Báo cáo</p>
            <i class="fa fa-exclamation-circle col-icon col-icon-feedback" aria-hidden="true"></i>
        </a>
        <a href="/contact" class="column col-contact">
            <p class="content">Liên hệ</p>
            <i class="fa fa-flag col-icon col-icon-contact" aria-hidden="true"></i>
        </a>
        <a href="/listdonate" class="column col-donate">
            <p class="content">Ủng hộ</p>
            <i class="fa fa-donate col-icon col-icon-donate" aria-hidden="true"></i>
        </a>
    </div>


    <div class="honors">
        <h1>Vinh danh sinh viên thành tích xuất sắc</h1>

        <div class="slider">
            <div class="slide" id="slide-1">
                <div class="card-box box1">
                    <img src="{{ url('img/male.png') }}" class="card-image" alt="">
                    <h3>Trần Văn Bắc</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.82</label>
                </div>
                <div class="card-box box2">
                    <img src="{{ url('img/female_color.png') }}" class="card-image" alt="">
                    <h3>Nguyễn Thị Linh</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.96</label>
                </div>
                <div class="card-box box3">
                    <img src="{{ url('img/knowledge.png') }}" class="card-image" alt="">
                    <h3>Trần Đồng Nam</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">4.00</label>
                </div>
                <div class="card-box box4">
                    <img src="{{ url('img/male_color.png') }}" class="card-image" alt="">
                    <h3>Đặng Văn Cường</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.91</label>
                </div>              
            </div>

            <div class="slide" id="slide-2">
                <div class="card-box box5">
                    <img src="{{ url('img/male_color.png') }}" class="card-image" alt="">
                    <h3>Trần Quang Việt</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.79</label>
                </div>
                <div class="card-box box6">
                    <img src="{{ url('img/female.png') }}" class="card-image" alt="">
                    <h3>Đỗ Thị Hòa</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.80</label>
                </div>
                <div class="card-box box7">
                    <img src="{{ url('img/knowledge.png') }}" class="card-image" alt="">
                    <h3>Nguyễn Đình Phi</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">4.00</label>
                </div>
                <div class="card-box box8">
                    <img src="{{ url('img/male.png') }}" class="card-image" alt="">
                    <h3>Vũ Văn Phong</h3>
                    <p>Khoa công nghệ thông tin</p>
                    <label for="" class="label1">3.95</label>
                </div>              
            </div>
        </div>

        <div class="wrap-slide">
            <a href="#slide-1" class="link-slide"></a>
            <a href="#slide-2" class="link-slide"></a>
        </div>
    </div>

    <script type="text/javascript">
        var list_col = document.getElementsByClassName("column");
        var list_icon = document.getElementsByClassName("col-icon");

        list_col[0].onmouseenter = function() {
            list_icon[0].style.transform = "scale(1.1)"
        }
        list_col[1].onmouseenter = function() {
            list_icon[1].style.transform = "scale(1.1)"
        }
        list_col[2].onmouseenter = function() {
            list_icon[2].style.transform = "scale(1.1)"
        }
        list_col[3].onmouseenter = function() {
            list_icon[3].style.transform = "scale(1.1)"
        }
        list_col[4].onmouseenter = function() {
            list_icon[4].style.transform = "scale(1.1)"
        }
        list_col[5].onmouseenter = function() {
            list_icon[5].style.transform = "scale(1.1)"
        }
        list_col[6].onmouseenter = function() {
            list_icon[6].style.transform = "scale(1.1)"
        }
        list_col[7].onmouseenter = function() {
            list_icon[7].style.transform = "scale(1.1)"
        }

        // 
        list_col[0].onmouseleave = function() {
            list_icon[0].style.transform = "scale(1)"
        }
        list_col[1].onmouseleave = function() {
            list_icon[1].style.transform = "scale(1)"
        }
        list_col[2].onmouseleave = function() {
            list_icon[2].style.transform = "scale(1)"
        }
        list_col[3].onmouseleave = function() {
            list_icon[3].style.transform = "scale(1)"
        }
        list_col[4].onmouseleave = function() {
            list_icon[4].style.transform = "scale(1)"
        }
        list_col[5].onmouseleave = function() {
            list_icon[5].style.transform = "scale(1)"
        }
        list_col[6].onmouseleave = function() {
            list_icon[6].style.transform = "scale(1)"
        }
        list_col[7].onmouseleave = function() {
            list_icon[7].style.transform = "scale(1)"
        }
    </script>

    @endsection
</body>
</html>