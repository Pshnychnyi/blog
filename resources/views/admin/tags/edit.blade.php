@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h3>Редактирование тега</h3>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главаня</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Теги</a></li>
					<li class="breadcrumb-item active">Редактировать тег</li>
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
				<form method="POST" action="{{route('admin.tag.update', ['id' => $tag->id])}}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="title">Наименование</label>
						<input type="text" name="title" value="{{ $tag->title }}" class="form-control" id="title" placeholder="Наименование тега">
						@error('title')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>               
					<button type="submit" class="btn btn-primary">Сохранить</button>
				</form>
			</div>
			
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection