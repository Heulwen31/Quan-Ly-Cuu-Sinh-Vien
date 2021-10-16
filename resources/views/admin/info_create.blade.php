<form method="post" action="/admin/info/store">
    @csrf
    <div>
        <label for="id">Ma so sinh vien</label><br>
        <input type="text" name="id">
    </div>
    <br>
    <div>
        <label for="cccd">So CCCD</label><br>
        <input type="text" name="cccd">
    </div>
    <br>
    <div>
        <label for="name">Ho ten</label><br>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="sex">Gioi tinh</label><br>
        <input type="text" name="sex">
    </div>
    <br>
    <div>
        <label for="birth">Ngay sinh</label><br>
        <input type="text" name="birth">
    </div>
    <br>
    <div>
        <label for="email">Email</label><br>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label for="phone">So dien thoai</label><br>
        <input type="text" name="phone">
    </div>
    <br>
    <div>
        <label for="address">Dia chi</label><br>
        <input type="text" name="address">
    </div>
    <br>
    <div>
        <label for="job">Cong viec</label><br>
        <input type="text" name="job">
    </div>
    <br>
    <div>
        <label for="consultant">Co van hoc tap</label><br>
        <input type="text" name="consultant">
    </div>
    <br>
    <div>
        <label for="gpa">GPA</label><br>
        <input type="text" name="gpa">
    </div>
    <br>
    <div>
        <label for="cpa">CPA</label><br>
        <input type="text" name="cpa">
    </div>
    <br>
    <div>
        <label for="point_training">Diem ren luyen</label><br>
        <input type="text" name="point_training">
    </div>
    <br>
    <div>
        <label for="course">Nien khoa</label><br>
        <input type="text" name="course">
    </div>
    <br>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>