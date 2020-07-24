@extends('layouts.app')

@section('content')

<header id="sfondo" class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="class mb-1"><sup>the</sup>Booker</h1>
          <hr id="bar">
          <p id="subtitle" class="lead">a great way to share readings</p>
          <button class="btn-warning my-5" id="btn" value="Turn-on the Lights">Turn-on the Lights</button>
        </div>
      </div>
    </div>
  </header>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
