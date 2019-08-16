<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;

class UserController extends Controller
{
    public function showUsers() {
        $users = User::where("id" , "!=" , Auth::user()->id)->paginate(10);

        return view('users.index', compact('users'));
    }

    public function edit($id) {
        $user = User::find($id);

        return view('users.editUser', compact('user'));
    }

    public function editStore($id)
    {
        $image = request()->file('avatar');

        $file = $image->getClientOriginalName();

        $image->storeAs('public/images' , $file);

        $user = Auth::user()->update([
            'name' => request()->name,
            'email' => request()->email,
            'avatar' => '/storage/images/'.$file,
        ]);

        return redirect('home');
    }
}
