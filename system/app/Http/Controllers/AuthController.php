<?php 

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class AuthController extends Controller{
	function login(){
		return view('login');
	}
	function register(){
		return view('register');
	}
	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('register')->with('success', 'Data Berhasil Ditambahkan');
	}
	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal Silahkan Periksa Email Dan Password Anda');
		}
	}
	function logout(){
		Auth::logout();
		return redirect('login');
	}
}


 ?>