<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.auth.login');
    }

    public function loginPost(Request $request)
    {
        //dd($request->post());
        //dd de print gibi yazdırmak için ekrana.Ama okunabilirliği daha yüksek,daha güzel.

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            //return "başarılı";die;
            return redirect()->route('admin.dashboard');
        }
        //return "hata";

        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı!');
        //hatayı buraya yazdım ama ekrana basması için login.blade.php de göstermem lazım.
        
    }
    
    public function logout()
    {
        Auth::logout(); //kütüphanenin bu metodu kendi gerçekleştirir logout işlemlerini
        return redirect()->route('admin.login');
        //web.php de hemen bu route u yaz.
    }
}
