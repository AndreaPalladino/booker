@extends('layouts.app')
@section('style')
    <style>
        body{
            background:linear-gradient(180deg,rgba(0,0,0,0.3), transparent) ,url('/media/contact.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    
<div class="container my-5 py-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Contact us</h1></div>

                <div class="card-body py-5">
                    <form method="POST" action="{{ route('submit') }}">
                        @csrf

                        <div class="form-group row ">
                            <label for="password" class=" col-md-4 col-form-label text-md-right text-white"><h6>Name & Surname</h6></label>
                           
                            <div class="col-md-6 col">
                                <input name="name" id="password" type="text" class="borderbox w-75 bg-transparent"  required placeholder="Name&Surname">

                                
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="email" class=" col-md-4 col-form-label text-md-right text-white"><h6>E-mail</h6></label>
                           
                            <div class="col-md-6 col">
                                <input name="mail" id="email" type="email" class="borderbox w-75 bg-transparent"  placeholder="e-mail" required autocomplete="email" autofocus>
                               
                                
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="email" class=" col-md-4 col-form-label text-md-right text-white"><h6>Mobile</h6></label>
                           
                            <div class="col-md-6 col">
                                <input name="phone" id="email" type="phone" class="borderbox w-75 bg-transparent"  placeholder="mobile" required autocomplete="email" autofocus>
                               
                                
                            </div>
                        </div>
                        

                       <button type="submit" class="btn btn-warning d-block mx-auto mt-4">Submit</button>

                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection