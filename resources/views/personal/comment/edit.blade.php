@extends('personal.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h4>Редактировать комментарии</h4>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{-- route('personal.index') --}}">Главаня</a></li>
					<li class="breadcrumb-item active">Комментарии</li>
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
				<form method="POST" action="{{ route('personal.comment.update', ['id' => $comment->id]) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="content">Комментарий</label>
						<input type="text" name="content" class="form-control" id="content" value="{{ $comment->content }}" placeholder="Комментарий">
						@error('content')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="form-group">	
						<button type="submit" class="btn btn-primary mb-5">Сохранить</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection