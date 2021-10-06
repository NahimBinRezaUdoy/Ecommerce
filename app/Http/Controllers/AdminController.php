<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('admin.users', compact('users'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        request()->session()->flash('message', 'User Successfully Deleted');
        return redirect()->route('admin.user.index');
    }
}
