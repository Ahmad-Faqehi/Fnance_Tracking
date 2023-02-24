<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class CustomUser extends Controller
{
    //
    public function store(Request $request)
    {
        
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        // Todo: Chcek if email already usded
        if(User::where('email', '=', $user->email)->first()){
            return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'The email is already used.'));
        }
        
        if($user->save()){
            
        auth()->login($user);
        return json_encode(array ('type'=>'success', 'title'=>'That Great', 'msg'=>'The registration done successfully.'));
        }else{
            return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'There is error while registering'));
        }        
        
    }

    public function checkEmail($email){
        return $user = User::where('email', '=', $email)->first();

    }
}
