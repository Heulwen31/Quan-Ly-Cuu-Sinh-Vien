<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>

<body>
    <form action="addstudent" method="post">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="">Content</label>
            <input type="text" class="form-control" name="content" placeholder="Content">
        </div>

        <div class="form-group">
            <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>