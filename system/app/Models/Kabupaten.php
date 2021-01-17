<?php  

	namespace App\Models;

	use App\Models\Provinsi;
	use App\Models\Kecamatan;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	// use App\Models\Traits\Attributes\ProvinsiAttributes;
	// use App\Models\Traits\Relations\ProvinsiRelations;

	class Kabupaten extends Model{

		// use ProvinsiAttributes, ProvinsiRelations;

		protected $table = 'kabupaten';

		function kecamatan(){
			return $this->hasMany(Kecamatan::class, 'id_kabupaten');
		}

		function provinsi(){
			return $this->belongsTo(Provinsi::class, 'id_provinsi');
		}
}

?>