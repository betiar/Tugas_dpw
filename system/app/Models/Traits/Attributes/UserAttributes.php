<?php 
namespace App\Models\Traits\Attributes;

trait UserAttributes {

	function getJenisKelaminStringAttribute(){
    	return ($this->jenis_kelamin == 1) ? "Laki-Laki" : "Perempuan";
    }

    function getStatusStringAttribute(){
    	return ($this->level == 1) ? "admin" : "Penjual";
    }

    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }
}


 ?>