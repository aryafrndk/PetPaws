<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
        {
            $admins = Admin::all();
            return response()->json($admins);
        }

        public function loginadmins(Request $request)
        {
            $username = $request->input('usernameadmin');
            $password = $request->input('passwordadmin');

            $admin = Admin::where('username', $username)->first();

            if ($admin && Hash::check($password, $admin->password)) {
                return redirect()->route('datakucing'); 
            } else {
                return redirect()->back()->with('error', 'Invalid username or password')->withInput();
            }
        }

        public function store(Request $request)
        {
            $admin = new Admin;
            $admin->username = $request->input('usernameadmin');
            $admin->password = Hash::make($request->input('passwordadmin'));
            $admin->save();

            return redirect()->route('datakucing');
        }
}
