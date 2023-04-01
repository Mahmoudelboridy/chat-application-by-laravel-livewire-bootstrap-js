@extends('styles.bootstrap')
@section('title','user')
@section('content')

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
     
            <li class="p-2 border-bottom">
              <a href="#!" class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                  <img style="height: 80px;width:80px" src="{{ $goser->image }}" alt="avatar"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                  <div class="pt-1">
                    <p class="fw-bold mb-0">{{ $goser->name }}</p>
                  </div>
                </div>
                <div class="pt-1">
                  <p class="small text-muted mb-1">5 mins ago</p>
                </div>
              </a>
            </li>
       
          </ul>

        </div>
      </div>

    </div>

    <div  class="col-md-6 col-lg-7 col-xl-8">

      <ul class="list-unstyled">
      @foreach ( $bodys as $body )
@if( $body->sender_id==$user->id)
<li class=" justify-content-between mb-4">
          <img style="height:70px" src="{{$user->image}}" alt="avatar"
            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
          <div class="card">
            <div class="card-header d-flex justify-content-between p-3">
              <p class="fw-bold mb-0">{{$user->name}}</p>
              <p class="text-muted small mb-0"><i class="far fa-clock"></i>{{$body->created_at}}</p>
            </div>
            <div class="card-body">
              <p class="mb-0">
                {{ $body->body }}
              </p>
            </div>
          </div>
        </li>
        @endif
        @if($body->sender_id==$goser->id)
        <li class=" justify-content-between mb-4">
          <img style="height:70px;margin-left:800px" src="{{$goser->image}}" alt="avatar"
            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
          <div class="card">
            <div class="card-header d-flex justify-content-between p-3">
              <p class="fw-bold mb-0">{{$goser->name}}</p>
              <p class="text-muted small mb-0"><i class="far fa-clock"></i>{{$body->created_at}}</p>
            </div>
            <div class="card-body">
              <p class="mb-0">
                {{ $body->body }}
              </p>
            </div>
          </div>
        </li>
        @endif
@endforeach

</ul>
<form method="POST" action="{{route('send')}}">
@csrf
          <div class="form-outline">
               
            <input name="body" class="form-control" type="text" style="height: 100px;" />
            <input name="sender_id" style="display:none" value="{{$user->id}}" />
            <input name="receiver_id" style="display:none" value="{{$goser->id}}" />
            <label class="form-label" for="textAreaExample2">Message</label>
          </div>
    
        <button name="send"  class="btn btn-info btn-rounded float-end">Send</button>
        </form>

   
     

    </div>

  </div>

</div>
<script>
  setTimeout(() => {
  document.location.reload();
}, 10000);

</script>
@endsection