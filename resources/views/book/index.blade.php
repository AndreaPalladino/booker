@extends('layouts.app')
@section('style')
<style>
     body{
          background-image: url('/media/booklist.jpeg');
          background-repeat: no-repeat;
          background-size: cover;
      }

</style>
    
@endsection
@section('content')




<div class="container-my-5 py-5">
    <div class="row mt-5">
        <div class="col-12 mt-5">
            <h1 class="text-center text10 mt-5">Books added by our Users</h1>
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <div class="row">
     
          @foreach($books as $book)
            
            <div class="col-6 col-md-4" id="myUL">
                
            <a href="{{route('book.show', ['book'=>$book])}}" class="d-block mb-4 h-100">
                    <div class="overlay overlay:hover">
                        <h6 class="text-center textMiddle">Go-></h6>
                      </div>
                      <img class="img-fluid h-img img-thumbnail" src="{{Storage::url($book->img)}}" alt="BookCover">
                      
                </a>
                
              </div>
        
        @endforeach
    
    </div>
  </div>






    
@endsection
@push('script')
  
@endpush