<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;


class ClientController extends Controller{
	function index(){
		$data['list_produk'] =  Produk::all();
		$data['list_kategori'] =  Kategori::all();

		return view('client.index', $data);
	}
	function checkout(){
		return view('client.checkout');
	}
	function detail(){
		return view('client.detail');
	}
	function shop(){
		return view('client.shop');
	}
	function cart(){
		return view('client.cart');
	}
	function test(){
		return view('client.test');
	}
	
}
?>