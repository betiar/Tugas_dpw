<?php  

	namespace App\Models;

	use App\Models\Kabupaten;
	use App\Models\Desa;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	// use App\Models\Traits\Attributes\ProvinsiAttributes;
	// use App\Models\Traits\Relations\ProvinsiRelations;

	class Kecamatan extends Model{

		// use ProvinsiAttributes, ProvinsiRelations;

		protected $table = 'kecamatan';

		function desa(){
			return $this->hasMany(Desa::class, 'id_kecamatan');
		}

		function kabupaten(){
			return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
		}
}

?>