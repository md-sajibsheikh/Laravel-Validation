<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function form(){
        return view('singup');
    }

    public function datastore(Request $req){

        $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:user_models,email',
        'phone' => 'required|unique:user_models,phone',
        'password' => 'required',
        'password_confirmation'=>'required|same:password'

        
    ]);

        $data['name']=$req->name;
        $data['email']=$req->email;
        $data['phone']=$req->phone;
        $data['password']=Hash::make('$req->password');
        UserModel::create($data);
        return redirect()->route('dash');
        
    }

    public function log(){
        return view('login');
    }


}
