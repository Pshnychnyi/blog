@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h3>Новый пользователь</h3>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главаня</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Cписок пользователей</a></li>
					<li class="breadcrumb-item active">Новый пользователь</li>
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
			<div class="col-md-9 offset-1">
				<form method="POST" action="{{ route('admin.user.store') }}">
					@csrf
					<div class="form-group">
						<label for="name">Имя</label>
						<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Имя пользователя">
						@error('name')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Email">
						@error('email')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="role">Выберите пользователя</label>
						<select id="role" class="form-control" name="role" data-placeholder="Выберите роль" style="width: 100%;">
							@foreach ($roles as $id => $role)
							<option value="{{ $id }}" {{ $id == old('role_id') ? ' selected' : '' }}>{{ $role }}</option>
							@endforeach
						</select>
						@error('role_id')
						<div class="text-danger">
							{{ $message }}
						</div>
						   @enderror
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Добавить</button>
					</div>            
				</form>
			</div>

		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection