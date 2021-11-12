<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/account.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-container">
        <div class="form-1">
            <div class="success-mess">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <form method="post" enctype="multipart/form-data" action="/save/{{ Auth::user()->id }}">
                @method('PATCH')
                @csrf

                <div class="wrap-avatar">
                    <img src="{{ Storage::url( Auth::user()->path ) }}" alt="image" class="avatar">
                </div>

                <div class="wrap-image">
                    <input type="file" name="image" class="file-input" placeholder="Chọn ảnh">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1 error-mess">{{ $message }}</div>
                    @enderror
                </div>
                <div class="wrap-submit-1">
                    <button type="Submit" class="submit">Lưu</button>
                </div>
            </form>
        </div>

        <div class="form-2">
            <form method="post" action="/account/{{ Auth::user()->id }}" onsubmit="return checkPass(this);">
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
                    <input type="password" name="pass" id="pass" class="wrap-input">
                </div>

                <div class="wrap">
                    <label for="cf-pass" class="wrap-label">Xác nhận mật khẩu</label>
                    <input type="password" name="cf_pass" id="cf_pass" class="wrap-input">
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
                mess.innerHTML = "Mật khẩu nhập lại không đúng";
                mess.className = "alert alert-danger";
                return false;
            } else {
                mess.innerHTML = "";
                mess.className = "";
                return true;
            }
        }
    </script>
    @endsection
</body>
</html>