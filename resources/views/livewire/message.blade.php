<div wire:poll.5000ms>
@foreach ($uselrs as $uselr )
            <li class="p-2 border-bottom">
              <a href="#!" class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                  <img style="height: 70px;width:70px" src="{{$uselr->image}}" alt="avatar"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                  <div class="pt-1">
                    <a href="/user/only_friend/message/{{ $uselr->id }}" style="text-decoration: none;">{{ $uselr->name }}</a>
                  </div>
                </div>
               
              </a>
            </li> 
            @endforeach
        </div>
