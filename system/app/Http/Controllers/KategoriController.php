<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_kategori'] =  $user->kategori;
		return view('kategori.index', $data);
	}
	function create(){
		return view('kategori.create');
	}
	function store(){
		$kategori = new Kategori;
		$kategori->id_user = request()->user()->id;
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data); 
	}
	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data); 
	}
	function update(Kategori $kategori){
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('admin/kategori')->with('warning', 'Data Berhasil Diubah');
	}
	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect('admin/kategori')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>