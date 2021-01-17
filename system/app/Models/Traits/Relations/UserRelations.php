<?php 
namespace App\Models\Traits\Relations;

use App\Models\Produk;

trait UserRelations {
	function seller(){
		return $this->hasMany(Produk::class, 'id_user');
	}
}


?>