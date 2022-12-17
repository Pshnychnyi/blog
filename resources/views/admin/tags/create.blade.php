@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h3>Новый тег</h3>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard v1</li>
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
			<div class="col-md-6">
				<form method="POST" action="{{ route('admin.tag.store') }}">
					@csrf
					<div class="form-group">
						<label for="title">Наименование</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Наименование тега">
						@error('title')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>               
					<button type="submit" class="btn btn-primary">Добавить</button>
				</form>
			</div>

		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection