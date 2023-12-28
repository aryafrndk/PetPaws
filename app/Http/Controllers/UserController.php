<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


    class UserController extends Controller
    {
        public function index()
        {
            $users = User::all();
            return response()->json($users);
        }
        
        public function logins(Request $request)
        {
            $username = $request->input('username');
            $password = $request->input('password');

            $user = User::where('username', $username)->first();

            if ($user && Hash::check($password, $user->password)) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid username or password')->withInput();
            }
        }
    
        public function store(Request $request)
        {
            $user = new User;
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect()->route('registberhasil');
        }


        public function destroy($id)
        {
            $user = User::find($id);

            if (!$user) {
                return redirect()->route('datauser')->with('error', 'Data user tidak ditemukan.');
            }

            $user->delete();

            return redirect()->route('datauser')->with('success', 'Data user berhasil dihapus.');
        }
    }
