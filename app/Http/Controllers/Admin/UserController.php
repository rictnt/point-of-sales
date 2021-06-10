<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
     
    public function create()
    {
        return view('admin.users.create');
    }
    
    public function store(Request $request)
    {
       User::create($request->all());
       return back();
    }
    
    public function show(User $user)
    {
        //
    }
    
    public function edit(User $user)
    {
        //
    }
    
    public function update(Request $request, User $user)
    {
        //
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
