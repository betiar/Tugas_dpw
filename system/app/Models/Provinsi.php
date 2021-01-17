<?php  

	namespace App\Models;

	use App\Models\Kabupaten;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	// use App\Models\Traits\Attributes\ProvinsiAttributes;
	// use App\Models\Traits\Relations\ProvinsiRelations;

	class Provinsi extends Model{

		// use ProvinsiAttributes, ProvinsiRelations;

		protected $table = 'provinsi';

		function kabupaten(){
			return $this->hasMany(Kabupaten::class, 'id_provinsi');
		}

}

?>