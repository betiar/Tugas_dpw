<?php 
namespace App\Models\Traits\Attributes;

trait PenjualAttributes {

	function getJenisKelaminStringAttribute(){
    	return ($this->jenis_kelamin == 1) ? "Laki-Laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }
}


 ?>