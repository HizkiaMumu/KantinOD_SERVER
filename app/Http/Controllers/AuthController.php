<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;

class AuthController extends Controller
{

    public function doLogin(Request $request){
      $user = User::where('username', $request->username)->first();
      if ($user != null) {
        $user = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if ($user) {
          return redirect('/admin')->with('OK', 'Selamat datang, ' . Auth::user()->nama_depan);
        } else {
          return redirect()->back()->with('ERR', 'Password salah.');
        }
      } else {
        return redirect()->back()->with('ERR', 'Username salah.');
      }
    }

    public function doLogout(){
      Auth::logout();
      return redirect()->back()->with('OK', 'Berhasil logout.');
    }

}
