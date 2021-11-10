<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!--  navbar-->
    <header>
        <h4>Quản lý cựu sinh viên</h4>
        <div class="profile">
            <div class="box">
                <form action="/search" method="get"></form>
                <input class="stext" type="text" placeholder="Search....">
                <a class="button" type="submit" href="#"></a>
                <i class="fa fa-search"></i>
            </div>

            <img class="profile-image" src="{{ url('img/user.png') }}" alt="">
            
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle abc" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu xy" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item item" href="#"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                    <a class="dropdown-item item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    
                            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                            <span class="title">Sign out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </div>
        </div>

    </header>


    <section>
        <nav>
            <input type="checkbox" id="toggle" onclick="changeColor()">
            <label class="side-toggle" for="toggle">
                <span class="fa fa-bars"></span>
            </label>

            <div class="navigation">
                <ul>
                    <li class="list active">
                        <a href="/homeadmin">
                            <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                            <span class="title">Trang chủ</span>
                        </a>
                    </li>
                    <li class="list active-user">
                        <a href="#">
                            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <span class="title">Tài khoản cá nhân</span>
                        </a>
                    </li>
                    <li class="list active-view">
                        <a href="/admin/info">
                            <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                            <span class="title">Xem thông tin cá nhân</span>
                        </a>
                    </li>
                    <li class="list active-add">
                        <a href="/admin/info/create">
                            <span class="icon"><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                            <span class="title">Thêm mới thông tin</span>
                        </a>
                    </li>
                    <li class="list active-forum">
                        <a href="/forum">
                            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <span class="title">Diễn đàn</span>
                        </a>
                    </li>
                    <li class="list">
                        <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    
                            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                            <span class="title">Sign out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <script>
        function changeColor() {
            var toggle = document.getElementById("toggle");
            var listColor = document.getElementsByClassName("title");
            if (toggle.checked) {
                for (var i = 0; i < listColor.length; i++) {
                    listColor[i].style.color = "#f4f4fb";
                }
            }
        }

    </script>

    @yield('homepage')
</body>

</html>