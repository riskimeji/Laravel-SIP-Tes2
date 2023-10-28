<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    public function index(Request $request){
    $query = $request->input('query');
    $users = User::where('name', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->paginate(10);

        $count = User::count();
        return view('petugas.user.user',[
            'counts'=> $count,
            'users' => $users
        ]);
    }
    public function create(){
        return view('petugas.user.create');
    }
    public function store(Request $request){
         $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8'
        ]);
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'visitor',
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('staff.member.index')->with('success', 'User has been added successfully.');
    }
   public function edit($id){
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('staff.member.index')->with('error', 'Pengguna tidak ditemukan');
        }

        return view('petugas.user.edit', ['user' => $user]);
    }
   public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'role' => 'required|string',
    ]);

    $user = User::find($id);

    if (!$user) {
        return redirect()->route('staff.member.index')
            ->with('error', 'Pengguna tidak ditemukan');
    }

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
    ]);

    return redirect()->route('staff.member.index')
        ->with('success', 'Informasi pengguna berhasil diperbarui');
    }

    public function destroy($id){
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('staff.member.index')
                ->with('error', 'Pengguna tidak ditemukan');
        }
        $user->delete();
        return redirect()->route('staff.member.index')
            ->with('success', 'Pengguna berhasil dihapus');
    }

}
