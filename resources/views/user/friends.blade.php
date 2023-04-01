@extends('styles.bootstrap')
@section('title','user')
@section('content')
@livewireStyles

<style>
    body {
        overflow-x: hidden;
    }
    </style>
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


<div class="row">
<div class="col-md-12">
    <div class="row">
      

    @livewire('friends')

    

    </div>
</div>
</div>


@livewireScripts

@endsection