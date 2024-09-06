<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;


class UserController extends Controller
{
    public function kiriman(Request $request){
        $data['kiriman']=User::all();
        $data['total_kiriman']=$data['kiriman']->count();

        return view('kiriman',$data);

    }

    public function pesanan(Request $request){
        $data['pesanan']=User::all();
        $data['total_pesanan']=$data['pesanan']->count();

        return view('pesanan',$data);

    }


    public function auth(Request $request){
        $validate = $request->validate([
            'name' => ['required','name'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validate)) {
            return redirect('/user');
        }
        return redirect()->back()->with('pesan login',"maaf,login anda gagal");
    }
    public function user(Request $request){
        $data['user']=User::all();
        $data['total_user']=$data['user']->count();

        return view('user',$data);
    }
}
