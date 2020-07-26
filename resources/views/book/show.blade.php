@extends('layouts.app')
@section('style')
  <style>
.login,
.image {
  min-height: 100vh;
}

body{
    background:linear-gradient(180deg,rgba(0,0,0,0.2),transparent 80%);
}

  </style>  
@endsection
@section('content')
    

<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-black">
          <video id="video" src="/media/lightbulb.mp4" muted autoplay height="1030"></video>
      </div>
      <div id="bgOn" class="col-md-8 col-lg-6 my-5 py-5 bgOff">
        <div class="login d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
              <h4 class="mb-4 text-center">{{$book->title}}</h4>
              <hr>
              <img src="{{Storage::url($book->img)}}" alt="cover" class="img-fluid h-img mx-auto d-block shadow mb-3">
              
              <h4 class="font-weight-bolder mt-5">Plot:</h4>
              <hr>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              <h4 class="text-center mt-4 float-none">{{$book->plot}}</h4>
              <hr>
              <h5 class="mt-5 mb-3">Caricato da: {{$book->user->name}}</h5>
              <h5>Categories:</h5>
              @foreach($book->categories as $category)
              <p class="">{{$category->name}}</p>
              @endforeach
              <hr class="hrshow mb-1">
              @auth
              <a href="{{Storage::url($book->pdf)}}" target="blank" class="btn mt-5 w-25"><i class="fas fa-book-reader fa-2x btnRead"></i></a>
              
              @if($book->user == Auth::user())
              <a href="{{route('book.edit', ['book'=>$book])}}" target="" class="btn mt-5 ml-5 w-25"><i class="fas fa-edit fa-2x text10 btnEdit"></i></a>
              <a href="" target="blank" class="btn mt-5 ml-5 w-25" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt fa-2x btnRemove"></i></a>
              @endif
              @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





<!-- Modal -->
<div class="modal modale fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-body bgModal">
        <form method="POST" action="{{route('book.destroy', compact('book'))}}">
          @method('DELETE')
          @csrf
            <h2 class="text10 text-center mb-5 pb-5">WAIT</h2>
            <h5 class="text-center text-dark my-5 py-5">Are you relly sure you want to REMOVE IT?</h5>
            <button type="submit" class="btn btnModalRemove mt-5 w-25 d-block mx-auto">Remove</button>
        </form>
        <button type="button" class="btn btn-warning mt-3 w-25 d-block mx-auto" data-dismiss="modal">Close</button>
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

setTimeout(turnOn,1800);

let video = document.querySelector('#video');

video.playbackRate = 2.0;
    </script>
@endpush