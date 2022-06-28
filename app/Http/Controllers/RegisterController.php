<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function create(){
        return view('auth.register');
    }

    public function store(){

        $User= User::create(request(['name','surname','email','password']));

        auth()->login($User);
        return redirect()->to('/');

    }
}
