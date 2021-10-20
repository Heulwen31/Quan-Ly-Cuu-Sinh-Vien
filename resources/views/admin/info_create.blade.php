<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <style type="text/css">
        .error-message{
            color: red;
            margin-left: 5px;
        }
    </style>
</head>
<body onUnLoad="removeValue()">
    <form method="post" action="/admin/info/store">
        @csrf
        <div>
            <label for="id">Ma so sinh vien</label><br>
            <input type="text" name="id" id="id"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('id')}}</span>
        </div>
        <br>
        <div>
            <label for="cccd">So CCCD</label><br>
            <input type="text" name="cccd" id="cccd"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('cccd')}}</span>
        </div>
        <br>
        <div>
            <label for="name">Ho ten</label><br>
            <input type="text" name="name" id="name"
                onkeypress="return run(event, this.id)"
                onblur="standardized(this.value)">
            <span class="error-message">{{$errors->first('name')}}</span>
        </div>
        <br>
        <div>
            <label for="sex">Gioi tinh</label><br>
            <input type="text" name="sex" id="sex"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('sex')}}</span>
        </div>
        <br>
        <div>
            <label for="birth">Ngay sinh</label><br>
            <input type="text" name="birth" id="birth"
                onkeypress="return run(event, this.id)"
                onfocus="birthFocus()" 
                onblur="birthBlur()"
                onkeyup="autoAppend(this.value)">
            <span class="error-message">{{$errors->first('birth')}}</span>
        </div>
        <br>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('email')}}</span>
        </div>
        <br>
        <div>
            <label for="phone">So dien thoai</label><br>
            <input type="text" name="phone" id="phone"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('phone')}}</span>
        </div>
        <br>
        <div>
            <label for="address">Dia chi</label><br>
            <input type="text" name="address" id="address"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('address')}}</span>
        </div>
        <br>
        <div>
            <label for="job">Cong viec</label><br>
            <input type="text" name="job" id="job"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('job')}}</span>
        </div>
        <br>
        <div>
            <label for="consultant">Co van hoc tap</label><br>
            <input type="text" name="consultant" id="consultant"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('consultant')}}</span>
        </div>
        <br>
        <div>
            <label for="gpa">GPA</label><br>
            <input type="text" name="gpa" id="gpa"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('gpa')}}</span>
        </div>
        <br>
        <div>
            <label for="cpa">CPA</label><br>
            <input type="text" name="cpa" id="cpa"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('cpa')}}</span>
        </div>
        <br>
        <div>
            <label for="point_training">Diem ren luyen</label><br>
            <input type="text" name="point_training" id="point_training"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('point_training')}}</span>
        </div>
        <br>
        <div>
            <label for="course">Nien khoa</label><br>
            <input type="text" name="course" id="course"
                onkeypress="return run(event, this.id)">
            <span class="error-message">{{$errors->first('course')}}</span>
        </div>
        <br>
        <div>
            <button type="Submit">Submit</button>
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
        
        function autoAppend(string) {
            if (string.length == 4 || string.length == 7) {
                birth.value = string + '/';
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
            alert("OK");
            console.log("OK");
            var list = document.getElementsByTagName("INPUT");
            for (var i = 0; i < list.length; i++) {
                list[i].value = "";
            }
        }
    </script>
</body>
</html>