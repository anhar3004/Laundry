<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect('/home');
        }
        return view('login');
    }

    public function cek(Request $request)
    {
        // $rules = [
        //     'nama'                 => 'required|string',
        //     'password'              => 'required|string'
        // ];

        // $messages = [
        //     'nama.required'        => 'username wajib diisi',
        //     'nama.string'           => 'username tidak valid',
        //     'password.required'     => 'Password wajib diisi',
        //     'password.string'       => 'Password harus berupa string'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }

        // $data = [
        //     'nama'     => $request->input('nama'),
        //     'password'  => $request->input('password'),
        // ];

        // Auth::attempt($data);

        // if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
        //     //Login Success
        //     return redirect('/home');

        // } else { // false

        //     //Login Fail
        //     Session::flash('error', 'Email atau password salah');
        //     return redirect('/login');
        // }
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
