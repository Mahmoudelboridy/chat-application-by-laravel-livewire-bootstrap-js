@extends('styles.bootstrap')
@section('title','user')
@section('content')
<div class="container-fluid p-0">
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
  
      <div class="row my-5">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img style="width:180px;height:150px;" src="{{$goser->image}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$goser->name}}</h5>
              <div class="d-flex justify-content-center mb-2">
                <a href="/user/only_friend/message/{{ $goser->id }}" style="text-decoration: none;">Message</a>
              </div>
            </div>
          </div>
        
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $goser->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $goser->email }}</p>
                </div>
              </div>
              
           
            
            </div>
          </div>
       
        </div>
      </div>
    </div>
@endsection