<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        $login= User::all();

        return view('admin.index',compact('login'));
    }



    public function create(){

        return view('admin.create');
    }

    public function store(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;


        $user->save();

        return redirect()->route('admin.index');
    }

    public function edit($id){

        $user = User::find($id);

        return view('admin.edit', compact('user'));

    }



    public function update(Request $request, $id){

        $user = User::find($id);

        $user->update($request->all());

        return redirect()->route('admin.index');
    }

    public function destroy($id){

        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.index');

    }
}
