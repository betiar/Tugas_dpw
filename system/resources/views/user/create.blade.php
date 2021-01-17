@extends('base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data User
					</div>
					<div class="card-body">
						<form action="{{url('user')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="nama" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama">
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label for="email" class="control-label">Email</label>
								<input type="text" class="form-control" name="email">
							</div>
							<div class="form-group">	
								<label for="" class="control-label">Jenis Kelamin</label>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
								    <label class="form-check-label" for="flexRadioDefault1">
								    Laki - Laki
								    </label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
								    <label class="form-check-label" for="flexRadioDefault2">
							 	    Perempuan
								    </label>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Gambar</label>
								<input type="file" class="form-control" name="gambar" accept=".jpg">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection