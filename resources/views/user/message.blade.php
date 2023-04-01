@extends('styles.bootstrap')
@section('title','user')
@section('content')
@livewireStyles

<nav class="navbar navbar-expand-lg navbar-light  bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="{{ route('user') }}">{{ $user->name }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul style="position:absolute;right:20px;" class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('logout') }}">logout</a>
        </li>
    </ul>
  </div>
</nav>

<div class="container py-5">
  
  <div class="row">

    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
      <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>

      <div class="card">
        <div class="card-body">

          <ul class="list-unstyled mb-0">


        @livewire('message')
          
       
          </ul>

        </div>
      </div>

    </div>

 

  </div>

</div>
@livewireScripts
@endsection