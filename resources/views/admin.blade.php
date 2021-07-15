@extends('leyout')
@section('title')
Admin
@endsection
@section('main_content')
<div>
 @if($errors->any())
    <div class="allert allert-warning ">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
<h1>Adding Posts</h1>
    <form method="post" action="admin/home_admin" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <input type="file" name="image" required>
    </div>
    <input type="title" name="title" id="title" placeholder="Input title" class="form-control"><br>  
    <textarea name="desc" id="desc" placeholder="desc" class="form-control"></textarea><br>
    <button type="submit" class="btn  btn-success">SEND</button>
    </form>
  
    </div>
    
@endsection