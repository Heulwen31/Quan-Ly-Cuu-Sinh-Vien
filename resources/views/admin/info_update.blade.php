<h1>Info - Update</h1>

<form method="post" action="/admin/info/update/{{ $student->id }}">
    @method('PATCH')
    @csrf
    <div>
        <label for="id">Ma so sinh vien</label><br>
        <input type="text" name="id" value="{{$student->id}}">
    </div>
    <br>
    <div>
        <label for="cccd">So CCCD</label><br>
        <input type="text" name="cccd" value="{{$student->cccd}}">
    </div>
    <br>
    <div>
        <label for="name">Ho ten</label><br>
        <input type="text" name="name" value="{{$student->name}}">
    </div>
    <br>
    <div>
        <label for="sex">Gioi tinh</label><br>
        <input type="text" name="sex" value="{{$student->sex}}">
    </div>
    <br>
    <div>
        <label for="birth">Ngay sinh</label><br>
        <input type="text" name="birth" value="{{$student->birth}}">
    </div>
    <br>
    <div>
        <label for="email">Email</label><br>
        <input type="email" name="email" value="{{$student->email}}">
    </div>
    <br>
    <div>
        <label for="phone">So dien thoai</label><br>
        <input type="text" name="phone" value="{{$student->phone}}">
    </div>
    <br>
    <div>
        <label for="address">Dia chi</label><br>
        <input type="text" name="address" value="{{$student->address}}">
    </div>
    <br>
    <div>
        <label for="job">Cong viec</label><br>
        <input type="text" name="job" value="{{$student->job}}">
    </div>
    <br>
    <div>
        <label for="consultant">Co van hoc tap</label><br>
        <input type="text" name="consultant" value="{{$study_detail->consultant}}">
    </div>
    <br>
    <div>
        <label for="gpa">GPA</label><br>
        <input type="text" name="gpa" value="{{$study_detail->gpa}}">
    </div>
    <br>
    <div>
        <label for="cpa">CPA</label><br>
        <input type="text" name="cpa" value="{{$study_detail->cpa}}">
    </div>
    <br>
    <div>
        <label for="point_training">Diem ren luyen</label><br>
        <input type="text" name="point_training" value="{{$study_detail->point_training}}">
    </div>
    <br>
    <div>
        <label for="course">Nien khoa</label><br>
        <input type="text" name="course" value="{{$study_detail->course}}">
    </div>
    <br>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>