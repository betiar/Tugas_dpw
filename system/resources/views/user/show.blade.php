@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail User
						<a href="{{url('admin/user')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
						<h4><b>Nama : </b>{{$user->nama}}</h4>
						<h4><b>Username : </b>{{$user->username}}</h4>
						<h4><b>Email : </b>{{$user->email}}</h4>
						<p>Akun dibuat : {{$user->created_at}}  |  Diedit : {{$user->updated_at}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection