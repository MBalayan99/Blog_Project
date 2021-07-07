@extends('leyout')
@section('title')
BlogVlog
@endsection
@section('main_content')
<div class="container">

  
<div class=".container text-primary"> 
  @foreach ( $posts as $post )
    
  
<div class="card" style="width:22rem;display: inline-block; border: 10px solid ;border-radius: 30px;margin-top:10px">

  <img src="{{ $post->image }}" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->desc }}</p>
    <p class="card-text">{{ $post->created_at }}</p>

    
    
  </div>

</div>
@endforeach
</div>
</div>
</div>
@endsection