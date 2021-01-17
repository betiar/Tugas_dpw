<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Provinsi;

class ClientController extends Controller{
	function index(){
		$data['list_produk'] =  Produk::paginate(4);
		return view('client.index', $data);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('client.testAjax', $data);
	}

	function shop(){
		$data['list_produk'] =  Produk::paginate(6);
		return view('client.shop', $data);
	}

	function cart(){
		
		return view('client.cart');
	}

	function checkout(){
		return view('client.checkout');
	}

	function detail(Produk $produk){
		$data['list_produk'] =  Produk::paginate(4);
		$data['produk'] = $produk;
		return view('client.detail', $data); 
	}
}
?>