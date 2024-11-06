<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $informasi = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($informasi)){
            if(Auth::user()->role == "admin"){
                return redirect("admin");
            }elseif(Auth::user()->role == "karyawan"){
                return redirect('karyawan');
            }elseif(Auth::user()->role == "user"){
                return redirect('user');
            }
        }else{
            return redirect()->back()->withErrors("error", "Gagal untuk login dgn apapun");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }

    public function yuhu(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
            "nama_lengkap" => "required"
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->password = $request->password;
        $user->save();

        if($user){
            return redirect()->route('login')->with('success', 'Berhasil register');
        
        }else{
            return redirect()->route('login')->with('error','Tidak berhasil register');
        }
    }

  
}
