<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //
    public function login()
{
   return view('backend.login.login');
}
public function login_verify()
{
   # menyiapkan validasi
   $list = [
   'email' => 'required|email',
   'password' => 'required'
   ];
   # validasi
   request()->validate($list);
   # ambil data masuk
   $email = request('email');
   $password = request('password');
   # verifikasi data
   if (Auth::attempt(['email' => $email, 'password' => $password]))
   {
     # data benar
     session()->flash('message',
     "<script>alert('Authorize')</script>");
     # redirect ke halaman detail
     return redirect(route('detail'));
   }
   # data salah
   session()->flash('message',
   "<script>alert('Not Authorize')</script>");
   # redirect kembali ke halaman login
   return back();
}
public function logout()
{
   # logout
   Auth::logout();
   # redirect ke halaman login
   return redirect(route('login'));
}
public function detail()
{
   return view('backend.dashboard.detail');
}

}

