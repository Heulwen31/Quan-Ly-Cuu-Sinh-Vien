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
        <p>Thanh ??i???u khi???n</p>
        <span>/</span>
        <a href="#">K???t n???i sinh vi??n c??ng khu v???c</a>
    </div>

    <button class="btn btn-secondary" style="margin-left: 250px; margin-top: 45px;" id="myBtn">Th??m nh??m</button>

    <div id="container">
        @foreach($contents as $data)
        <div id="hanoi" class="p-3 mb-2 bg-primary text-white">
            <a href="delete/{{$data->id}}" class="btn bg-primary" style="float: right;" onclick="return confirmDel();">&times;</a>
            <img src="" alt="">
            <h1 style="font-size: 2rem;"> {{$data->diadiem}} </h1>
            <p> {{$data->noidung}} </p>
            <a href="{{$data->link}}" class="btn btn-light">??i t???i</a>
        </div>
        @endforeach
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <form method="post" action="/localcreate" id="form">
                @csrf
                <span class="close">&times;</span>
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Ti??u ?????</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tieude">
                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">N???i dung</label>
                    <input type="text" class="form-control" id="exampleInputContent" name="noidung">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLink" class="form-label">???????ng d???n t???i nh??m</label>
                    <input type="url" class="form-control" id="exampleInputPassword1" name="link">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="diadiem">
                        <option selected>?????a ??i???m</option>
                        <option value="H?? Nam">H?? Nam</option>
                        <option value="H?? N???i">H?? N???i</option>
                        <option value="Qu???ng Ninh">Qu???ng Ninh</option>
                        <option value="An Giang">An Giang</option>
                        <option value="B?? R???a- V??ng T??u">B?? R???a- V??ng T??u</option>
                        <option value="B???c Li??u">B???c Li??u</option>
                        <option value="B???c Giang">B???c Giang</option>
                        <option value="B???c K???n">B???c K???n</option>
                        <option value="B???c Ninh">B???c Ninh</option>
                        <option value="B???n Tre">B???n Tre</option>
                        <option value="B??nh D????ng">B??nh D????ng</option>
                        <option value="B??nh Ph?????c">B??nh Ph?????c</option>
                        <option value="B??nh Thu???n">B??nh Thu???n</option>
                        <option value="C?? Mau">C?? Mau</option>
                        <option value="Cao B???ng">Cao B???ng</option>
                        <option value="C???n Th??">C???n Th??</option>
                        <option value="???? N???ng">???? N???ng</option>
                        <option value="?????k L???k">?????k L???k</option>
                        <option value="?????k N??ng">?????k N??ng</option>
                        <option value="??i???n Bi??n">??i???n Bi??n</option>
                        <option value="?????ng Nai">?????ng Nai</option>
                        <option value="?????ng Th??p">?????ng Th??p</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="H?? Giang">H?? Giang</option>
                        <option value="H?? T??nh">H?? T??nh</option>
                        <option value="H???i D????ng">H???i D????ng</option>
                        <option value="H???i Ph??ng">H???i Ph??ng</option>
                        <option value="H???u Giang">H???u Giang</option>
                        <option value="H??a B??nh">H??a B??nh</option>
                        <option value="Th??nh ph??? H??? Ch?? Minh">Th??nh ph??? H??? Ch?? Minh</option>
                        <option value="H??ng Y??n">H??ng Y??n</option>
                        <option value="Kh??nh H??a">Kh??nh H??a</option>
                        <option value="Ki??n Giang">Ki??n Giang</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Ch??u">Lai Ch??u</option>
                        <option value="L???ng S??n">L???ng S??n</option>
                        <option value="L??o Cai">L??o Cai</option>
                        <option value="L??m ?????ng">L??m ?????ng</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam ?????nh">Nam ?????nh</option>
                        <option value="Ngh??? An">Ngh??? An</option>
                        <option value="Ninh B??nh">Ninh B??nh</option>
                        <option value="Ninh Thu???n">Ninh Thu???n</option>
                        <option value="Ph?? Th???">Ph?? Th???</option>
                        <option value="Ph?? Y??n">Ph?? Y??n</option>
                        <option value="Qu???ng B??nh">Qu???ng B??nh</option>
                        <option value="Qu???ng Nam">Qu???ng Nam</option>
                        <option value="Qu???ng Ng??i">Qu???ng Ng??i</option>
                        <option value="Qu???ng Ninh">Qu???ng Ninh</option>
                        <option value="Qu???ng Tr???">Qu???ng Tr???</option>
                        <option value="S??c Tr??ng">S??c Tr??ng</option>
                        <option value="S??n La">S??n La</option>
                        <option value="T??y Ninh">T??y Ninh</option>
                        <option value="Th??i B??nh">Th??i B??nh</option>
                        <option value="Th??i Nguy??n">Th??i Nguy??n</option>
                        <option value="Thanh H??a">Thanh H??a</option>
                        <option value="Th???a Thi??n Hu???">Th???a Thi??n Hu???</option>
                        <option value="Ti???n Giang">Ti???n Giang</option>
                        <option value="Tr?? Vinh">Tr?? Vinh</option>
                        <option value="Tuy??n Quang">Tuy??n Quang</option>
                        <option value="V??nh Long">V??nh Long</option>
                        <option value="V??nh Ph??c">V??nh Ph??c</option>
                        <option value="Y??n B??i">Y??n B??i</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">B???n mu???n t???o nh??m?</label>
                </div>
                <button type="submit" class="btn btn-primary">T???o nh??m</button>
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
            if (!confirm("B???n c?? mu???n x??a kh??ng?")) {
                return false;
            }
        }
    </script>
    @endsection
</body>

</html>