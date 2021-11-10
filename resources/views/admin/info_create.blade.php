<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/info_create.css') }}">
</head>
<body onUnLoad="removeValue()">

    @extends('home_page')

    @section('homepage')

    <h1>Thêm mới thông tin</h1>

    <form method="post" action="/admin/info/store" class="form">
        @csrf

        <div class="column1">
            <div class="wrap">
                <label for="id" class="wrap-label">Mã số sinh viên</label>
                <input type="text" name="id" id="id" 
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('id')}}</span>
            </div>
            
            <div class="wrap">
                <label for="cccd" class="wrap-label">Số CCCD</label>
                <input type="text" name="cccd" id="cccd"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('cccd')}}</span>
            </div>
            
            <div class="wrap">
                <label for="name" class="wrap-label">Họ tên</label>
                <input type="text" name="name" id="name"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)"
                    onblur="standardized(this.value)">
                <span class="error-message">{{$errors->first('name')}}</span>
            </div>
            
            <div class="wrap">
                <label for="sex" class="wrap-label">Giới tính</label>
                <input type="text" name="sex" id="sex"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('sex')}}</span>
            </div>
            
            <div class="wrap">
                <label for="birth" class="wrap-label">Ngày sinh</label>
                <input type="date" name="birth" id="birth"
                    class="wrap-content"
                    onkeypress="return run(event, this.id)"
                    onfocus="birthFocus()" 
                    onblur="birthBlur()">
                <span class="error-message">{{$errors->first('birth')}}</span>
            </div>
        </div>

        <div class="column2">
            <div class="wrap">
                <label for="email" class="wrap-label">Email</label>
                <input type="email" name="email" id="email"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('email')}}</span>
            </div>
            
            <div class="wrap">
                <label for="phone" class="wrap-label">Số điện thoại</label>
                <input type="text" name="phone" id="phone"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('phone')}}</span>
            </div>
            <div class="wrap">
                <label for="address" class="wrap-label">Địa chỉ</label>
                <input type="text" name="address" id="address"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('address')}}</span>
            </div>
            
            <div class="wrap">
                <label for="job" class="wrap-label">Công việc</label>
                <input type="text" name="job" id="job"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('job')}}</span>
            </div>
            
            <div class="wrap">
                <label for="consultant" class="wrap-label">Cố vấn học tập</label>
                <input type="text" name="consultant" id="consultant"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('consultant')}}</span>
            </div>
            
        </div>
        
        <div class="column3">
            <div class="wrap">
                <label for="cpa" class="wrap-label">Điểm CPA</label>
                <input type="text" name="cpa" id="cpa"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('cpa')}}</span>
            </div>
            
            <div class="wrap">
                <label for="point_training" class="wrap-label">Điểm rèn luyện</label>
                <input type="text" name="point_training" id="point_training"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('point_training')}}</span>
            </div>
            
            <div class="wrap">
                <label for="faculty" class="wrap-label">Khoa</label>
                <input type="text" name="faculty" id="gpa"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('faculty')}}</span>
            </div>

            <div class="wrap">
                <label for="course" class="wrap-label">Niên khóa</label>
                <input type="text" name="course" id="course"
                    class="wrap-content" placeholder="Nhập" 
                    onkeypress="return run(event, this.id)">
                <span class="error-message">{{$errors->first('course')}}</span>
            </div>
            
        </div>

        <div class="wrap-submit">
            <button type="Submit" class="submit" onclick="show()">Thêm</button>
        </div>
    </form>

    <script>
        var id = document.getElementById("id");
        id.focus();
        var cccd = document.getElementById("cccd");
        var hname = document.getElementById("name");
        var sex = document.getElementById("sex");
        var birth = document.getElementById("birth");
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var address = document.getElementById("address");
        var job = document.getElementById("job");
        var consultant = document.getElementById("consultant");
        var gpa = document.getElementById("gpa");
        var cpa = document.getElementById("cpa");
        var point = document.getElementById("point_training");
        var course = document.getElementById("course");

        function run(e, presentId) {
            if (e.keyCode == 13) {
                e.preventDefault();
                if (presentId == "id") {
                    cccd.focus();
                }
                if (presentId == "cccd") {
                    hname.focus();
                }
                if (presentId == "name") {
                    sex.focus();
                }
                if (presentId == "sex") {
                    birth.focus();
                }
                if (presentId == "birth") {
                    email.focus();
                }
                if (presentId == "email") {
                    phone.focus();
                }
                if (presentId == "phone") {
                    address.focus();
                }
                if (presentId == "address") {
                    job.focus();
                }
                if (presentId == "job") {
                    consultant.focus();
                }
                if (presentId == "consultant") {
                    gpa.focus();
                }
                if (presentId == "gpa") {
                    cpa.focus();
                }
                if (presentId == "cpa") {
                    point.focus();
                }
                if (presentId == "point_training") {
                    course.focus();
                }

                return false;
            }
        }

        function birthFocus() {
            birth.style.color = "black";
            if (birth.value == "yyyy/mm/dd") {
                birth.value = '';
            }
        }

        function birthBlur() {
            if (birth.value == "") {
                birth.value = "yyyy/mm/dd";
                birth.style.color = "grey";
            }
        }
        
        function standardized(string) {
            string = string.trim().replace(/\s+/g, ' ');
            var split = string.toLowerCase().split(" ");
            for (var i = 0; i < split.length; i++) {
                split[i] = split[i].charAt(0).toUpperCase() + split[i].slice(1);
            }
            hname.value = split.join(" ");
        }

        function removeValue() {
            var list = document.getElementsByTagName("INPUT");
            for (var i = 0; i < list.length; i++) {
                list[i].value = "";
            }
        }

        function show() {
            alert($warning);
        }
    </script>
</body>
</html>