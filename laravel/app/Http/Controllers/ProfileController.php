<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Container\RewindableGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function show(User $user)
    {
        $title['title'] = 'User Profile';
        return view('user.user', compact('user'), $title);
    }
    public function update(Request $request, User $user)
    {

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('user.user', $user)->with('success', 'Profile updated successfully');
    }
    public function edit(User $user)
    {
        $title['title'] = 'Update';
        return view('user.edit', compact('user'), $title);
    }
}
