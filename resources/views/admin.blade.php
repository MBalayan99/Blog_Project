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
    <form method="post" action="admin/home_admin">
    @csrf
    <input type="text" name="text" id="text" placeholder="image url" class="form-control"><br>
    <input type="title" name="title" id="title" placeholder="Input title" class="form-control"><br>  
    <textarea name="desc" id="desc" placeholder="desc" class="form-control"></textarea><br>
    <button type="submit" class="btn  btn-success">SEND</button>
    </form>
    </div>
@endsection