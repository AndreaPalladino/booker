@extends('layouts.app')
@section('style')
    <style>
        body{
            background-image: url('/media/editbook.jpeg');
            
            background-repeat: no-repeat;
            background-size: cover;
        }
        @media screen and (max-width:600){
            body{
            background:linear-gradient(180deg,rgba(255,255,255,0.5),rgba(255,255,255,0.5)), url('/media/editbook.jpeg');
            
            background-repeat: no-repeat;
            background-size: cover;
        }
        }
    </style>
@endsection
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <col-12 class="text-center ml-5 pl-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif</col-12>
    </div>
</div>
    
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-5 pl-md-5 mt-md-3">
            <h1 class="font-weight-bold text-center ml-md-5 pl-md-5">Editing....</h1>
        </div>
        <div class="col-12 col-md-5 ml-md-3 pl-md-4 mt-5">
        <form class="mt-5 mt-md-0" method="POST" action="{{route('book.update', compact('book'))}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group my-4">
                  <label ></label>
                <input name="title" type="text" class=" mt-5 mt-md-0 bg-transparent borderAdd w-100" placeholder="Title" value="{{$book->title}}">
                </div>
                <div class="form-group my-4">
                    <label ></label>
                    <input name="author" type="text" class="bg-transparent borderAdd w-100" placeholder="Author" value="{{$book->author}}">
                </div>
                <div class="form-group my-4">
                    <textarea  name="plot" class="rounded-box my-5" rows="5" cols="50" placeholder="Plot">{{$book->plot}}</textarea>
                </div>
                @foreach($categories as $category)
                <div class="form-check d-md-inline mx-md-1">
                <input name="{{$category->id}}" class="form-check-input text-white text-md-dark" type="checkbox" value="{{$category->id}}" id="defaultCheck1" value="{{$book->category}}">
                    <label class="form-check-label" for="defaultCheck1">
                      {{$category->name}}
                    </label>
                  </div>
                @endforeach
                <div class="form-group my-4">
                    <label class="mr-2" >Cover</label>
                    <input name="img" type="file" class="btn-dark" value="{{$book->img}}">
                </div>
                <div class="form-group my-4">
                    <label >e-Book</label>
                    <input name="pdf" type="file" class="btn-dark" value="{{$book->pdf}}">
                </div>
                <button type="submit" class="btn btn-warning mx-auto d-block">Edit</button>
              </form>
        </div>
    </div>
</div>

@endsection