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
<body>
    <form method="post" action="/admin/info/store">
        @csrf
        <div>
            <label for="id">Ma so sinh vien</label><br>
            <input type="text" name="id">
            <span class="error-message">{{$errors->first('id')}}</span>
        </div>
        <br>
        <div>
            <label for="cccd">So CCCD</label><br>
            <input type="text" name="cccd">
            <span class="error-message">{{$errors->first('cccd')}}</span>
        </div>
        <br>
        <div>
            <label for="name">Ho ten</label><br>
            <input type="text" name="name">
            <span class="error-message">{{$errors->first('name')}}</span>
        </div>
        <br>
        <div>
            <label for="sex">Gioi tinh</label><br>
            <input type="text" name="sex">
            <span class="error-message">{{$errors->first('sex')}}</span>
        </div>
        <br>
        <div>
            <label for="birth">Ngay sinh</label><br>
            <input type="date" name="birth">
            <span class="error-message">{{$errors->first('birth')}}</span>
        </div>
        <br>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email">
            <span class="error-message">{{$errors->first('email')}}</span>
        </div>
        <br>
        <div>
            <label for="phone">So dien thoai</label><br>
            <input type="text" name="phone">
            <span class="error-message">{{$errors->first('phone')}}</span>
        </div>
        <br>
        <div>
            <label for="address">Dia chi</label><br>
            <input type="text" name="address">
            <span class="error-message">{{$errors->first('address')}}</span>
        </div>
        <br>
        <div>
            <label for="job">Cong viec</label><br>
            <input type="text" name="job">
            <span class="error-message">{{$errors->first('job')}}</span>
        </div>
        <br>
        <div>
            <label for="consultant">Co van hoc tap</label><br>
            <input type="text" name="consultant">
            <span class="error-message">{{$errors->first('consultant')}}</span>
        </div>
        <br>
        <div>
            <label for="gpa">GPA</label><br>
            <input type="text" name="gpa">
            <span class="error-message">{{$errors->first('gpa')}}</span>
        </div>
        <br>
        <div>
            <label for="cpa">CPA</label><br>
            <input type="text" name="cpa">
            <span class="error-message">{{$errors->first('cpa')}}</span>
        </div>
        <br>
        <div>
            <label for="point_training">Diem ren luyen</label><br>
            <input type="text" name="point_training">
            <span class="error-message">{{$errors->first('point_training')}}</span>
        </div>
        <br>
        <div>
            <label for="course">Nien khoa</label><br>
            <input type="text" name="course">
            <span class="error-message">{{$errors->first('course')}}</span>
        </div>
        <br>
        <div>
            <button type="Submit">Submit</button>
        </div>
    </form>
</body>
</html>