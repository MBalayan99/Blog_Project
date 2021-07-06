@extends('leyout')
@section('title')
BlogVlog
@endsection
@section('main_content')
<div class=".container-sm">
<p>Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services.[2][3] Its development during the 1990s and 2000s, changed the way brands and businesses use technology for marketing. As digital platforms became increasingly incorporated into marketing plans and everyday life,[4] and as people increasingly use digital devices instead of visiting physical shops,[5][6] digital marketing campaigns have become prevalent, employing combinations of search engine optimization (SEO), search engine marketing (SEM), content marketing, influencer marketing, content automation, campaign marketing, data-driven marketing, e-commerce marketing, social media marketing, social media optimization, e-mail direct marketing, display advertising, e–books, and optical disks and games have become commonplace. Digital marketing extends to non-Internet channels that provide digital media, such as television, mobile phones (SMS and MMS), callback, and on-hold mobile ring tones.[7] The extension to non-Internet channels differentiates digital marketing from online marketing.[8]</p>

  
<div class=".container text-primary"> 
  @foreach ( $posts as $post )
    
  
<div class="card" style="width:19rem;display: inline-block;">
  <img src="{{ $post->image }}" class="card-img-top" alt="image">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->desc }}</p>
    
  </div>

</div>
@endforeach
</div>
</div>
</div>
@endsection