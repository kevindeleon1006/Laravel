<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class Dash extends Controller
{
    function show()
    {
        $title['title'] = 'Users';
        $user = User::get();
        return view('dashboard.userprof', compact('user'), $title);
    }

    function userprofile()
    {
        $title['title'] = 'Update';
        return view('user.user')->with('user', auth()->user());
    }

    function edit_view($id)
    {
        $user = User::findOrFail($id);
        $title['title'] = 'Update';
        return view('user.edit', compact('user'), $title);
    }

    function maindash($id)
    {
        $title['title'] = 'Dashboard';
        return view('dashboard.dashboardmain', compact('user'), $title);
    }
    public function edit()
    {
        $title['title'] = 'Update';
        return view('user.edit')->with('user', auth()->user());
    }
    public function update(UpdateUser $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->phone = $request->phone;
        $user->municipality = $request->municipality;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
