<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Donate</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('css/list_donate.css') }}">
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="#">Ủng hộ</a>
    </div>
    
    <div class="wrap">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Mã số sinh viên</th>
                    <th>Họ tên</th>
                    <th>Số tiền ủng hộ</th>
                    <th>Ngày chuyển</th>
                    <th>Lời nhắn</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donates as $donate)
                <tr>
                    <td>{{ $donate->id_author }}</td>
                    <td>{{ $donate->username }}</td>
                    <td>{{ $donate->money }}</td>
                    <td>{{ $donate->time }}</td>
                    <td>{{ $donate->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
    </script>

    @endsection
</body>
</html>