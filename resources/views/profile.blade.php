@extends('layouts.app')
@section('style')
    <style>
        body{
            background:linear-gradient(180deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('/media/profile.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endsection
@section('content')
    

<div class="container py-5 my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center d-none d-md-flex justify-content-center">Hello<span class=" ml-2 text10 h1"> {{$user->name}}</span></h1>
        </div>
        <div class="col-12 col-md-7">
           <img src="/media/profilepic.jpg" alt="" class="img-fluid profile" height="300" width="200">
        <div>
        <a href="{{route('book.create')}}" class="btn btnUpload mt-5 ml-5">Upload a Book</a>
        </div>
        </div>
        <div class="col-12 col-md-5 mt-5">
        <h3 class="text-white text-center">{{$user->email}}</h3>
        <hr class="social">
        <span class="d-inline ml-md-5 px-3"><i class="fab fa-facebook-square fa-3x text-white"></i></span>
           
        <span class="d-inline ml-md-5 px-3"><i class="fab fa-twitter-square fa-3x text-white"></i></span>
            
        <span class="d-inline ml-md-5 px-3"><i class="fab fa-instagram-square fa-3x text-white"></i></span>
        </div>
    </div>
</div>






<div class="container my-5 py-5">
    <div class="row">
        
		<div class="col-md-12">
       <table class="table table-list-search">
                    <thead>
                        <tr class="bgTable h5">
                            <th class="textTable mx-auto">Books Uploaded</th>
                            <th class="textTable mx-auto">Uploaded When</th>
                            <th class="textTable mx-auto">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td class="text-white">{{$book->title}}</td>
                            <td class="text-white">{{$book->created_at}}</td>
                        <td class="text-white">
                        <a href="{{route('book.show', ['book'=>$book])}}" class="btn"><i class="fas fa-eye fa-2x btnShow"></i></a>
                        <a href="{{route('book.edit', ['book'=>$book])}}" class="btn"><i class="fas fa-edit fa-2x text10 btnEdit"></i></a>
                       {{-- <a href="{{route('book.destroy', ['book'=>$book])}}" target="" class="btn" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-trash-alt fa-2x btnRemove"></i></a> --}}
                        </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table> 
		</div>
    </div>
</div>

<!-- Modal -->
{{-- <div class="modal modale fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-body bgModal">
          <form method="POST" action="{{route('book.destroy', ['book'=>$book])}}">
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
  </div> --}}





@endsection