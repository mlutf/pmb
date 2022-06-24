<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $password = $request->password;
        $data = User::where('username', $request->username)->first();
        if ($data) {
            Session::put('login', TRUE);
            Session::put('name', $data->nama_pengguna);
            if ($data->password == $password) {
               if($data->role =="admin"){
                   return "Halaman admin";
               }else if($data->role == "dosen"){
                   return "Halaman dosen";
               }else{
                   return "Halaman mahasiswa";
               }
            } else {
                return redirect()->back()->with('danger', 'Password Salah');
            }
        } else {
            return redirect()->back()->with('danger', 'User Tidak Ditemukan');
        }
    }
    public function logout()
    {
        Session::put('login', FALSE);
        return redirect('/');
    }
}
