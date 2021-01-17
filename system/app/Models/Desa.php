<?php  

	namespace App\Models;

	use App\Models\Kecamatan;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	// use App\Models\Traits\Attributes\ProvinsiAttributes;
	// use App\Models\Traits\Relations\ProvinsiRelations;

	class Desa extends Model{

		// use ProvinsiAttributes, ProvinsiRelations;

		protected $table = 'desa';

		function kecamatan(){
			return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
		}
}

?>