@extends('layouts.app')
@section('style')
  <style>
      body{
          background-image: url('/media/addbook.jpeg');
          background-repeat: no-repeat;
          background-size: cover;
      }

      @media screen and (max-width:600){
        body{
          background-image: url('/media/addbook.jpeg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position x: left  !important;
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
    
<div class="container my-5 py 5">
    <div class="row">
        <div class="col-12 col-md-5 ml-md-5">
            <h1 class="font-weight-bold ml-md-5 pl-md-5">Upload your Book here....</h1>
        </div>
        <div class="col-12 col-md-5 ml-md-5 pl-md-5">
        <form method="POST" action="{{route('book.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group ">
                  <label ></label>
                <input name="title" type="text" class="bg-transparent borderAdd w-100" placeholder="Title" value="{{old('title')}}">
                </div>
                <div class="form-group my-4">
                    <label ></label>
                    <input name="author" type="text" class="bg-transparent borderAdd w-100" placeholder="Author" value="{{old('author')}}">
                </div>
                <div class="form-group mt-1">
                    <textarea  name="plot" class="rounded-box my-5" rows="5" cols="50" placeholder="Plot" value="{{old('plot')}}"></textarea>
                </div>
                {{-- @foreach($categories as $category)
                <div class="form-check d-md-inline mx-md-1">
                <input name="{{$category->id}}" class="form-check-input text-white text-md-dark" type="checkbox" value="{{$category->id}}" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      {{$category->name}}
                    </label>
                  </div>
                @endforeach --}}
                @foreach($categories as $category)
                <div class="form-check d-md-inline mx-md-1">
                <input name="tag_id[]" class="form-check-input text-white text-md-dark" type="checkbox" value="{{$category->id}}" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      {{$category->name}}
                    </label>
                  </div>
                @endforeach
                <div class="form-group my-3">
                    <label class="mr-2" >Cover</label>
                    <input name="img" type="file" class="btn-dark" value="{{old('img')}}">
                </div>
                <div class="form-group my-4">
                    <label >e-Book</label>
                    <input name="pdf" type="file" class="btn-dark" value="{{old('pdf')}}">
                </div>
                <button type="submit" class="btn btn-warning mx-auto d-block">Submit</button>
              </form>
        </div>
    </div>
</div>



<!-- stai dicendo alla request di creare un array con il nome tag_id e inserisci in questo array il valore di category id dell'input che selzioneo

categorie 1: thriller, 2: fantasy, 3: romanzo. 
Quandoo seleziono categorie fantasy e romanzo, nella request avrò
$request = [
    'name' => nome del libro,
    'prezzo' => prezzo del libro
    'tag_id' => [
        1 => 2,
        2 => 3
    ]
]

foreach($tag_id as $tag) {
    $book->categories()->attach($tag);
}
-->

@endsection