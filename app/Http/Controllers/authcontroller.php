<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    //
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }

    public function sign_up(Request $request){
        $valdition=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'conf_password'=>'required',
            'image'=>'required',
            'role'=>'required'

            ]) ;  
            $pass=$request->password;
            $conf=$request->conf_password;

            if($valdition){
                if($pass==$conf){
                    $image=$request->file('image');
                    $extension=$image->getClientOriginalExtension();
                    $image_name=time().'.'.$extension;
                    $image_name_path='/storage/pics/'.$image_name;
                    $image->move('storage/pics',$image_name);
                    $insert=User::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>Hash::make($request->password),
                        'role'=>$request->role,
                        'image'=>$image_name_path
                        ]);
                        if($insert){
                            return redirect('/');
                        }
                }
                else{
                    return "password is not match";
                }
            } 
    }
    public function log_in(Request $request){
    
            $email=$request->email ;
            $uson=User::where('email','=',$email)->first();
            if (Hash::check($request->password,$uson->password)) {
                $role=$uson->role;
                session::put('name',$uson->name);
                session::put('role',$uson->role);



            if($role=='user'){
                return redirect()->to('/user');
            }
            }
            else{
                return "password is not correct";
            }}
           
       

public function user(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('user.user',compact('session','user'));
}
public function frien(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    $user_id=$user->id;
    $users=User::inRandomOrder()->get()->except($user_id);
    return view('user.friends',compact('session','user','users'));

}
public function frien1(Request $request,$id){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    $goser=User::where('id','=',$id)->first();
    return view('user.only_firend',compact('id','user','goser'));
}
public function message(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    $id=$user->id ;
    $uselrs=User::get()->except($id);
    return view('user.message',compact('user','uselrs'));
}

public function messag(Request $request,$id){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    $goser=User::where('id','=',$id)->first();
    $bodys=messages::where('sender_id','=',$user->id)
    ->where('receiver_id','=',$goser->id)
    ->orwhere('sender_id','=',$goser->id)
    ->where('receiver_id','=',$user->id)
    ->orderBy('id','ASC')->get();

    return view('user.messag',compact('user','goser','bodys'));
}

public function send(Request $request){
    $validate=$request->validate([
        'body'=>'required'
    ]);

    if($validate){
         messages::create([
         'body'=>$request->body,
         'sender_id'=>$request->sender_id,
         'receiver_id'=>$request->receiver_id
         ]);
     }
     return redirect()->back();


}

public function logout(){
    session::forget('name');
    session::forget('role');
    return redirect()->to('/');
}




}