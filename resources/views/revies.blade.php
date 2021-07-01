    @extends('leyout')
    @section('title') Review @endsection
    @section('main_content') 
    <h1>Form for adding reviews</h1>
    @if($errors->any())
    <div class="allert allert-danger ">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <form method="post" action="/revies/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Input email" class="form-control"><br>
    <input type="subject" name="subject" id="subject" placeholder="Input subject" class="form-control"><br>
    <textarea name="message" id="message" placeholder="Input yor message" class="form-control"></textarea><br>
    <button type="submit" class="btn  btn-success">SEND</button>
    </form>

    <h1> ALL Reviews</h1>
    @foreach($rewiws as $el)
    <div class=" alert alert-primary text text-red">
    <b>{{ $el->subject}}</b>
    <h3>{{$el->subject}}</h3>
    <h3>{{$el->message}}</h3>
    </div>
    
    @endforeach
    @endsection