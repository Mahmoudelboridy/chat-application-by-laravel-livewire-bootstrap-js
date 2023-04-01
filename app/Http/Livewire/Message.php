<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class Message extends Component
{
    public function render()
    {
        if(session::has('name')){
            $session=session::get('name');
        }
        $user=User::where('name','=',$session)->first();
        $id=$user->id ;
        $uselrs=User::get()->except($id);
        return view('livewire.message',compact('user','uselrs'));
    }
}
