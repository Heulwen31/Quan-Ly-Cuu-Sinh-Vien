<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
</head>
<body>
    
    <div class="wrap-container">
        <div class="heading">
            <img src="{{ url('img/uet-logo.jpg') }}" alt="" class="logo">
            <div class="heading-p">
                <p class="title">Trường Đại học Công nghệ - Đại học Quốc gia Hà Nội</p>
            </div>
        </div>

        <div class="wrap-content">
            <div class="image">
                <img src="{{ url('img/manage.png') }}" alt="" class="logo-in">
                <p>Hệ thống quản lý Cựu sinh viên</p>
            </div>

            <div class="form">
                <div class="heading-form">
                    <h2>UETLOGIN</h2>
                    <p>Sử dụng tài khoản bạn được cung cấp</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                    <div class="acc">
                        <i class="fa fa-user icon" id="icon-acc"></i>

                        <input id="acc" type="text"
                            class="input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" 
                            placeholder="Tài khoản" onfocus="moveIconAcc()" onblur="removeIconAcc()">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="error">Thông tin xác thực không chính xác.</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="pass">
                        <i class="fa fa-lock icon" id="icon-pass"></i>

                        <input id="password" type="password"
                            class="input @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Mật khẩu"
                            onfocus="moveIconPass()" onblur="removeIconPass()">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="error">Thông tin xác thực không chính xác.</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="remember">
                        <input class="remember-input" type="checkbox" name="remember" id="remember" {{
                            old('remember') ? 'checked' : '' }}>

                        <label class="remember-label" for="remember">
                            {{ __('Ghi nhớ') }}
                        </label>
                    </div>

                    <div class="submit">
                        <button type="submit" class="button-submit">
                            {{ __('Đăng nhập') }}
                        </button>
                    </div>

                    <!-- <div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link edit-link" href="{{ route('password.request') }}">
                            {{ __('Quên mật khẩu?') }}
                        </a>
                        @endif
                    </div> -->
                </form>
            </div>
        </div>
    </div>

    <script>
        var acc = document.getElementById("acc");
        var pass = document.getElementById("password");
        var show = document.getElementById("after");
        var icon_acc = document.getElementById("icon-acc");
        var icon_pass = document.getElementById("icon-pass");

        function moveIconAcc() {
            icon_acc.style.left = "40px";
            icon_acc.style.color = "#4c7fb3";
        }

        function removeIconAcc() {
            icon_acc.style.left = "45px";
            icon_acc.style.color = "#919497";
        }

        function moveIconPass() {
            icon_pass.style.left = "40px";
            icon_pass.style.color = "#4c7fb3";
        }

        function removeIconPass() {
            icon_pass.style.left = "45px";
            icon_pass.style.color = "#919497";
        }
    </script>
</body>
</html>