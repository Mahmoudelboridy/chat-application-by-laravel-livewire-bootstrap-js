@extends('styles.bootstrap')
@section('title','user')
@section('content')
<div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center "
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img style="width:120px;height:100px" src="{{$user->image}}"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                 <div >
                  <div class="col-6 mb-3">
                  
                    </div>
                    <div style="margin-top:-68px; margin-left:100px" class="col-6 mb-3">
                  
                    </div>
                    </div>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Name</h6>
                      <p class="text-muted">{{ $user->name }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ $user->email }}</p>
                    </div>
                  </div>
                  <h6>React</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                    <a style="text-decoration:none;" href="{{route('message')}}"><h6>Message</h6></a>
                    </div>
                    <div class="col-6 mb-3">
                    <a style="text-decoration:none;" href="{{route('friends')}}"><h6>Search for friends</h6></a>
                    </div>
                  </div>
                  <a  style="margin-left:120px;text-decoration:none;" href="/logout">logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection