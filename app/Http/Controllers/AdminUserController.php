<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminUserController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }
    public function create()
    {
        return view('dashboard.users.create');
    }
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|unique:users,username|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|min:8',
        'photo' => 'image|file|max:2048', // Validasi foto profil (opsional)
        'is_admin' => 'boolean',
    ]);

    // Proses upload foto profil (jika ada)
    if ($request->file('photo')) {
        $validatedData['photo'] = $request->file('photo')->store('user-photos');
    }

    // Hash password sebelum disimpan
    $validatedData['password'] = bcrypt($validatedData['password']);

    // Tentukan apakah pengguna adalah admin atau bukan
    $validatedData['is_admin'] = $request->has('is_admin') ? true : false;

    // Simpan data ke database
    User::create($validatedData);

    // Redirect kembali dengan pesan sukses
    return redirect('/dashboard/users')->with('create', true);
}
public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'photo' => 'image|file|max:2048', // Maksimal 2MB
        ];

        // Password hanya divalidasi jika ada input
        if ($request->password) {
            $rules['password'] = 'min:8';
        }

        $validatedData = $request->validate($rules);

        // Jika password diisi, lakukan hashing
        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            unset($validatedData['password']);
        }

        // Upload gambar baru jika ada
        if ($request->file('photo')) {
            // Hapus gambar lama jika ada
            if ($request->oldPhoto) {
                Storage::delete($request->oldPhoto);
            }

            $validatedData['photo'] = $request->file('photo')->store('user-photos');
        }

        // Update role admin
        $validatedData['is_admin'] = $request->has('is_admin');

        // Update data user
        $user->update($validatedData);

        return redirect('/dashboard/users')->with('update', true);
    }

    public function destroy(User $user)
{
    // Hapus semua berita yang terkait dengan user ini (jika diperlukan)
    $user->news()->delete();

    // Hapus gambar profil jika ada
    if ($user->photo) {
        Storage::delete($user->photo);
    }

    // Hapus user
    $user->delete();

    return redirect('/dashboard/users')->with('delete', true);
}

}
