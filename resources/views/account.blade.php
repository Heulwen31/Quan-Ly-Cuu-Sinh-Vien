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
        <form method="post" action="/account/{{ Auth::user()->id }}">
            @method('PATCH')
            @csrf

            <div class="name">
                <label for="name">Tên tài khoản</label>
                <input type="text" disabled="disabled" value="{{ Auth::user()->name }}">
            </div>

            <div class="email">
                <label for="email">Tài khoản email</label>
                <input type="text" disabled="disabled" value="{{ Auth::user()->email }}">
            </div>

            <div class="password">
                <label for="pass">Mật khẩu</label>
                <input type="text" disabled="disabled" value="{{ Auth::user()->password }}">
            </div>

            <div class="cf-password">
                <label for="cf-pass">Xác nhận mật khẩu</label>
                <input type="text" name="cf_pass">
            </div>
            <div class="wrap-submit">
                <button type="Submit" class="submit">Lưu</button>
            </div>
        </form>
    </div>
    @endsection
</body>
</html>