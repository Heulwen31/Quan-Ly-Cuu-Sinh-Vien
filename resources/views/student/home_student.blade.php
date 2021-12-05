<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/home_page.css') }}">
</head>

<body>
    <header id="header">
        <h4 id="h4">Quản lý cựu sinh viên</h4>
    </header>

    <div class="header">
        <div class="profile">
            <img class="profile-image" src="{{ Storage::url( Auth::user()->path ) }}" alt="image">
            
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle abc" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu xy" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item item" href="{{ url('accountstudent') }}"><i class="fa fa-user" aria-hidden="true"></i>Tài khoản</a>
                    <a class="dropdown-item item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    
                        <span class="icon"><i class="fa fa-sign-out-alt" aria-hidden="true"></i></span>
                        <span class="title-logout">Đăng xuất</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section>
        <nav>
            <input type="checkbox" id="toggle" onclick="changeColor()">
            <label class="side-toggle" for="toggle">
                <span class="fa fa-bars"></span>
            </label>

            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="/homestudent">
                            <span class="icon active"><i class="fa fa-home" aria-hidden="true"></i></span>
                            <span class="title active">Tổng quan</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/student/info">
                            <span class="icon active-view"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                            <span class="title active-view">Thông tin cá nhân</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/chat">
                            <span class="icon active-chat"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                            <span class="title active-chat">Chat</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/feedback">
                            <span class="icon active-feedback"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                            <span class="title active-feedback">Báo cáo</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/forumstudent">
                            <span class="icon active-forum"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <span class="title active-forum">Diễn đàn</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/localstudent">
                            <span class="icon active-local"><i class="fa fa-map-marked-alt" aria-hidden="true"></i></span>
                            <span class="title active-local">Kết nối cựu sinh viên</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/notification">
                            <span class="icon active-contact"><i class="fa fa-flag" aria-hidden="true"></i></span>
                            <span class="title active-contact">Thông báo</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/donate">
                            <span class="icon active-donate"><i class="fa fa-donate" aria-hidden="true"></i></span>
                            <span class="title active-donate">Ủng hộ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <script>
        function changeColor() {
            var toggle = document.getElementById("toggle");
            var header = document.getElementById("header");
            var h4 = document.getElementById("h4");
            var listColor = document.getElementsByClassName("title");
            if (toggle.checked) {
                header.style.width = "55px";
                h4.style.display = "none";
                for (var i = 0; i < listColor.length; i++) {
                    listColor[i].style.color = "#f4f4fb";
                }
            } else {
                header.style.width = "226px";
                h4.style.display = "block";
                for (var i = 0; i < listColor.length; i++) {
                    listColor[i].style.color = "rgb(191, 203, 217)";
                }
            }
        }
    </script>

    @yield('homestudent')

</body>

</html>