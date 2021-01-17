<?php 

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;

class UserController extends Controller{
	function index(){
		$data['list_user'] =  User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(UserStoreRequest $request){

		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->jenis_kelamin = request('jenis_kelamin');
		$user->email = request('email');
		$user->password = request('password');
		$user->save();

		return redirect('user/user')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(User $user){
		$data['user'] = $user;
		dd($data);
		return view('user.show', $data); 
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data); 
	}
	function update(User $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->jenis_kelamin = request('jenis_kelamin');
		$user->email = request('email');
		if(request('password')) $user->password = request('password');
		$user->save();

		return redirect('user')->with('warning', 'Data Berhasil Diubah');
	}
	function destroy(user $user){
		$user->delete();

		return redirect('user')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>