<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Import Export Excel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <a href="/home">Home</a>

        <br><br>

        <h2 class="mb-4">
            Nhập và xuất file excel
        </h2>

        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Chọn file</label>
                </div>
            </div>
            <button class="btn btn-primary">Nhập dữ liệu</button>
            <a class="btn btn-success" href="{{ route('file-export') }}">Xuất dữ liệu</a>
        </form>
    </div>
</body>

</html>