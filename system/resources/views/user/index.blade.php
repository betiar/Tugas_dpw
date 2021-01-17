@extends('base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data User
						<a href="{{url('user/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>NO</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Produk</th>
								<th>Status</th>
							</thead>
							<tbody>
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
											<a href="{{url('user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('user', $user->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{{$user->nama}}</td>
									<td>{{$user->username}}</td>
									<td>{{$user->produk_count}}</td>
									<td>{{$user->status_string}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection