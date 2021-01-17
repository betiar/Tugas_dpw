<?php 
namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait ProdukAttributes {

	function getFormatHargaAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getFormatBeratAttribute(){
		return $this->attributes['berat']." gram";
	}
	
	function handleUploadGambar(){

		if(request()->hasFile('gambar')){
			$gambar = request()->file('gambar');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$gambar->extension();
			$url = $gambar->storeAs($destination, $filename);
			$this->gambar = "app/".$url;
			$this->save();
		}
	}

	function handleDeleteGambar(){
		$gambar = $this->gambar;
		$path = public_path($gambar);
		if(file_exists($path)){
			unlink($path);
		}
		return true;
	}
}


 ?>