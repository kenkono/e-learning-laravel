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

    public function showFollowing(){
        $users = Auth::user()->following()->paginate(10);

        return view('users.followinglist', compact('users'));
    }

    public function showFollowers(){
        $users = Auth::user()->followers()->paginate(10);
        return view('users.followerslist', compact('users'));
    }

    public function changePassword($id) {
        $user = User::find($id);

        return view('users.changePassword', compact('user'));
    }

    public function passwordStore($id)
    {
        // password check
        if(request()->password){

            request()->validate([
                'password' => ['required', 'min:6', 'confirmed']
            ]);

            if(Hash::check(request()->current_password, Auth::user()->password)){
                Auth::user()->update([
                    'password' => Hash::make(request()->password)
                ]);
            } else {
                return "incorrect password";
            }
            
        }

        return redirect('home');
    }

    public function follow($id) {
        Auth::user()->following()->attach($id);

        return redirect()->back();
    }

    public function unfollow($id) {
        Auth::user()->following()->detach($id);

        return redirect()->back();
    }
}
