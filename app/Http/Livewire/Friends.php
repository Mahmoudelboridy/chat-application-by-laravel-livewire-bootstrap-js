<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Session;


use Livewire\Component;

class Friends extends Component
{
    public function render()
    {
        if(session::has('name')){
            $session=session::get('name');
        }
        $user=User::where('name','=',$session)->first();
        $user_id=$user->id;
        $users=User::get()->except($user_id);
        return view('livewire.friends',compact('users'));
    }
}
