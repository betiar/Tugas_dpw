@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Produk
						<a href="{{url('admin/produk')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<img src="{{url("public/$produk->gambar")}}">
						<p> Harga : {{$produk->format_harga}} |
							Berat : {{$produk->format_berat}} |
							Stok : {{$produk->stok}} |
							Penjual : {{$produk->seller->username}}
						</p> <br>
						<p>Tanggal Produksi : {{$produk->created_at->diffForHumans()}}</p>
						<p> Deskripsi : <br> {!! nl2br($produk->deskripsi) !!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection