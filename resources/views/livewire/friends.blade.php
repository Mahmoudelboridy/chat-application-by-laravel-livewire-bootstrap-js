<div wire:poll.5000ms>
@foreach ($users as $user )
    <div  class="my-5 mx-5 card" style="width: 18rem;">
  <img src="{{ $user->image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $user->name }}</h5>
    <a href="/user/only_friend/{{$user->id}}" class="btn btn-primary">see his account</a>
  </div>
</div>
@endforeach
</div>
