@extends('layouts.app')
@section('style')
    <style>
        body{
            background-image: url('/media/editbook.jpeg');
            
            background-repeat: no-repeat;
            background-size: cover;
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
    
<div class="container my-5 py 5">
    <div class="row">
        <div class="col-12 col-md-5">
            <h1 class="font-weight-bold text-center">Editing....</h1>
        </div>
        <div class="col-12 col-md-5 ml-3 pl-4 mt-5">
        <form method="POST" action="{{route('book.update', compact('book'))}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group my-4">
                  <label ></label>
                <input name="title" type="text" class="bg-transparent borderAdd w-100" placeholder="Title" value="{{$book->title}}">
                </div>
                <div class="form-group my-4">
                    <label ></label>
                    <input name="author" type="text" class="bg-transparent borderAdd w-100" placeholder="Author" value="{{$book->author}}">
                </div>
                <div class="form-group my-4">
                    <textarea  name="plot" class="rounded-box my-5" rows="5" cols="50" placeholder="Plot">{{$book->plot}}</textarea>
                </div>
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