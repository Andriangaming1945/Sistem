<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class originalcontroller extends Controller
{
    public function user(){
        $posts = post::latest()->paginate(5);
        return view("user.user", compact('posts'));
    }

    public function karyawan(){
        $posts = post::latest()->paginate(5);
        return view('karyawan.karyawan', compact('posts'));
    }

    
    public function admin(){
        $posts = post::latest()->paginate(5);
        return view("admin.admin", compact('posts'));
    }
}
