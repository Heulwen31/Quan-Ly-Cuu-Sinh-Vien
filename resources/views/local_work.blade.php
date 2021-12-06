<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Local</title>
    
    <style>
        .wrap-head{
            position: absolute;
            top: 0;
            left: 16%;
            font-size: 17px;
            padding-top: 12px;
            padding-left: 3px;
            margin-bottom: 16px;
            z-index: 1;
        }
        
        .wrap-head p{
            color: black;
            display: inline-block;
        }
        
        .wrap-head span{
            color: rgb(202, 191, 191);
        }
        
        .wrap-head a{
            color: black;
            text-decoration: none;
            transition: all .3s;
        }
        
        .wrap-head a:hover{
            text-decoration: none;
            color: rgb(106, 6, 199)
        }
        
        .wrap{
            margin-top: 40px;
            margin-left: 300px;
        }

        #container {
            margin-top: 20px;
            margin-left: 230px;
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        #container>div {
            margin: 30px;
            border-radius: 10px;
            width: 250px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 30px 250px;
            padding: 20px;
            border: 1px solid #888;
            width: 80% !important;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .active-local{
            color: #fff !important;
        }
    </style>
</head>

<body>
    @extends('home_page')
    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Kết nối sinh viên cùng khu vực</a>
    </div>

    <button class="btn btn-secondary" style="margin-left: 250px; margin-top: 45px;" id="myBtn">Thêm nhóm</button>

    <div id="container">
        @foreach($contents as $data)
        <div id="hanoi" class="p-3 mb-2 bg-primary text-white">
            <a href="delete/{{$data->id}}" class="btn bg-primary" style="float: right;" onclick="return confirmDel();">&times;</a>
            <img src="" alt="">
            <h1 style="font-size: 2rem;"> {{$data->diadiem}} </h1>
            <p> {{$data->noidung}} </p>
            <a href="{{$data->link}}" class="btn btn-light">Đi tới</a>
        </div>
        @endforeach
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <form method="post" action="/localcreate" id="form">
                @csrf
                <span class="close">&times;</span>
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tieude">
                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">Nội dung</label>
                    <input type="text" class="form-control" id="exampleInputContent" name="noidung">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLink" class="form-label">Đường dẫn tới nhóm</label>
                    <input type="url" class="form-control" id="exampleInputPassword1" name="link">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="diadiem">
                        <option selected>Địa điểm</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Bà Rịa- Vũng Tàu">Bà Rịa- Vũng Tàu</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Lâm Đồng">Lâm Đồng</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Tuyên Quang">Tuyên Quang</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Yên Bái">Yên Bái</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Bạn muốn tạo nhóm?</label>
                </div>
                <button type="submit" class="btn btn-primary">Tạo nhóm</button>
            </form>
        </div>

    </div>

    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function confirmDel() {
            if (!confirm("Bạn có muốn xóa không?")) {
                return false;
            }
        }
    </script>
    @endsection
</body>

</html>