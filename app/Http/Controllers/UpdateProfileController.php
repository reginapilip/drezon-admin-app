<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UpdateProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('auth/profile',
            [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone
            ]);
    }

    public function profile(Request $request)
    {
        $user = \Auth::user();

        if ($request->isMethod('POST')) {
            // dd($request);
            // dd($user);
            $id = $request->id;
            $first_name = $request->name;
            $last_name = $request->lastname;
            $email = $request->email;
            $phone = $request->phone;

            // return response()->json();
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->email = $email;
            $user->phone = $phone;
            $user->save();

            // if ($user->wasChanged('first_name')) {
            //     return redirect('/profile');
            //     session()->flash('success', 'User updated successfully');
            // }
            
        } 
    }
}
