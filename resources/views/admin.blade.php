<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
@if($errors->any())
    <div class="allert allert-warning ">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <form method="post" action="admin/home_admin">
    @csrf
    <input type="text" name="text" id="text" placeholder="image url" class="form-control"><br>
    <input type="title" name="title" id="title" placeholder="Input title" class="form-control"><br>  
    <textarea name="desc" id="desc" placeholder="desc" class="form-control"></textarea><br>
    <button type="submit" class="btn  btn-success">SEND</button>
    </form>
</body>
</html>