<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;




class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function profile(){
        $user = User::where('id', Auth::user()->id)->first();

        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'password' => ['confirmed']
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->update();

        // Alert::success('Edit User Success', 'Success');
        Alert::success('Edit User Successful', 'Success');
        return redirect('/dashboard/profile');
    }
}
