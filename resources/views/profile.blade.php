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
        <div class="col-7">
           <img src="/media/profilepic.jpg" alt="" class="img-fluid profile" height="300" width="200">
        </div>
        <div class="col-5 mt-5">
        <h3 class="text-white text-center">{{$user->email}}</h3>
        <hr class="social">
        <span class="d-inline ml-5 px-3"><i class="fab fa-facebook fa-3x text-white"></i></span>
           
        <span class="d-inline ml-5 px-3"><i class="fab fa-twitter-square fa-3x text-white"></i></span>
            
        <span class="d-inline ml-5 px-3"><i class="fab fa-instagram-square fa-3x text-white"></i></span>
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
                        <td class="text-white"><a href="{{route('book.edit', ['book'=>$book])}}" class="btn btn-warning">Edit</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table> 
		</div>
    </div>
</div>








@endsection