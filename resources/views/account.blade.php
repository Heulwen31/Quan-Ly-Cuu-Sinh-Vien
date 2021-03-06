<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Account</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/account.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Tài khoản</a>
    </div>

    <div class="wrap-container">
        <div class="form-1">
            <form method="post" enctype="multipart/form-data" action="/save/{{ Auth::user()->id }}">
                @method('PATCH')
                @csrf

                <div class="wrap-avatar">
                    <img src="{{ Storage::url( Auth::user()->path ) }}" alt="image" class="avatar">
                </div>

                <div class="wrap-image">
                    <input type="file" name="image" class="custom-file-input" id="customFile" onchange='uploadFile(this)'>
                    <label class="custom-file-label label" for="customFile" id="file-name">Chọn ảnh</label>
                </div>
                <div class="wrap-submit-1">
                    <button type="Submit" class="submit">Lưu</button>
                </div>
            </form>
        </div>

        <div class="form-2">
            <form method="post" action="/account/{{ Auth::user()->id }}" 
                onsubmit="return checkPass(this);" autocomplete="off">
                @method('PATCH')
                @csrf

                <div class="wrap">
                    <label for="name" class="wrap-label">Tên người dùng</label>
                    <input type="text" disabled="disabled" value="{{ Auth::user()->name }}" class="wrap-input">
                </div>

                <div class="wrap">
                    <label for="email" class="wrap-label">Tài khoản</label>
                    <input type="text" disabled="disabled" value="{{ Auth::user()->email }}" class="wrap-input">
                </div>

                <div class="wrap">
                    <label for="pass" class="wrap-label">Mật khẩu mới</label>
                    <input type="password" name="pass" autocomplete="new-password" id="pass" class="wrap-input">
                </div>

                <div class="wrap">
                    <label for="cf-pass" class="wrap-label">Xác nhận mật khẩu</label>
                    <input type="password" name="cf_pass"  autocomplete="new-password" id="cf_pass" class="wrap-input">
                </div>
                <div id="mess-different"></div>
                <div class="wrap-submit-2">
                    <button type="Submit" class="submit">Lưu</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        var pass = document.getElementById("pass");
        var cf_pass = document.getElementById("cf_pass");
        var mess = document.getElementById("mess-different");

        function checkPass() {
            if (pass.value != cf_pass.value) {
                mess.innerHTML = "Mật khẩu nhập lại không đúng!";
                mess.className = "alert alert-danger";
                return false;
            } else {
                mess.innerHTML = "";
                mess.className = "";
                return true;
            }
        }

        function uploadFile(target) {
            document.getElementById("file-name").innerHTML = target.files[0].name;
        }
    </script>
    @endsection
</body>
</html>