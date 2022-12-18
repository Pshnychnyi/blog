@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h3>Тег {{ $user->name }}</h3>
				<div class="col-md-6">
					<a href="{{ route('admin.user.edit', ['user' => $user->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
					<form  class="d-inline" action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						{{-- <a href="" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> --}}
					</form>
				</div>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главаня</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Cписок пользователей</a></li>
					<li class="breadcrumb-item active">{{ $user->name }}</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		
		<!-- Main row -->
		<div class="row">
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Данные о теге</h3>
					</div>

					<div class="card-body">
						<table class="table table-bordered table-hover">
							<tbody>
								<tr>
									<td>ID</td>
									<td>{{ $user->id }}</td>
								</tr>
								<tr>
									<td>Имя пользователя</td>
									<td>{{ $user->name }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{{ $user->email }}</td>
								</tr>
								<tr>
									<td>Пароль</td>
									<td>{{ $user->password }}</td>
								</tr>
								<tr>
									<td>Дата создания</td>
									<td>{{ $user->created_at }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection