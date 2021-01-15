@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Kategori
						<a href="{{url('admin/kategori')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
							<h3>{{$kategori->nama}}</h3>
							<p>Dibuat : {{$kategori->created_at->format("d M Y")}} | Diedit : {{$kategori->updated_at->format("d M Y")}} </p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection