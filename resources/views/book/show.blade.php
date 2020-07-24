@extends('layouts.app')
@section('style')
  <style>
.login,
.image {
  min-height: 100vh;
}

body{
    background:linear-gradient(180deg,rgba(0,0,0,0.3),transparent 80%);
}

  </style>  
@endsection
@section('content')
    

<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-black">
          <video src="/media/lightbulb.mp4" muted autoplay height="1030"></video>
      </div>
      <div id="bgOn" class="col-md-8 col-lg-6 my-5 py-5 bgOff">
        <div class="login d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
              <h4 class="mb-4 text-center">{{$book->title}}</h4>
              <img src="{{Storage::url($book->img)}}" alt="cover" class="img-fluid h-img mx-auto d-block">
              <h5 class=" my-5">Caricato da: {{$book->user->name}}</h5>
              <h4 class="font-weight-bolder">Plot:</h4>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              @auth
              <a href="{{Storage::url($book->pdf)}}" target="blank" class="btn btn-warning mt-5 w-25">Read</a>
              
              @if($book->user == Auth::user())
              <a href="" target="blank" class="btn btn-primary mt-5 ml-5 w-25">Edit</a>
              <a href="" target="blank" class="btn btn-danger mt-5 ml-5 w-25">Remove</a>
              @endif
              @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







@endsection
@push('script')
    <script>
        let bgOn = document.querySelector('#bgOn');

function turnOn(){
    bgOn.classList.remove('bgOff');
}

setTimeout(turnOn,3470);
    </script>
@endpush