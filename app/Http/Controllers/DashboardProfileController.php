<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.profile.index', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profile)
    {
        return view('dashboard.profile.edit', [
            'user' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username,' . $profile->id,
            'email' => 'required|email|unique:users,email,' . $profile->id,
            'photo' => 'image|file|max:2048',
        ];
    
        $validatedData = $request->validate($rules);
    
        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        }
    
        if ($request->file('photo')) {
            if ($profile->photo) {
                Storage::delete($profile->photo);
            }
            $validatedData['photo'] = $request->file('photo')->store('user-photos');
        }
    
        $validatedData['is_admin'] = $request->is_admin;
    
        $profile->update($validatedData);
    
        return redirect()->route('profile.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
