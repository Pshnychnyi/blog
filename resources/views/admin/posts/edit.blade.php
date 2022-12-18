@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<h3>Редкатирование статьи</h3>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главаня</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Статьи</a></li>
					<li class="breadcrumb-item active">Редактировать статью</li>
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
				<form method="POST" action="{{ route('admin.post.update', ['id' => $post->id]) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="title">Наименование</label>
						<input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" placeholder="Наименование статьи">
						@error('title')
						<div class="text-danger">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="content">Описание</label>
						<textarea id="summernote" name="content" class="form-control" rows="3" placeholder="Выберите категорию"> {{ $post->content }}</textarea>
						@error('content')
						<div class="text-danger">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="category_id">Категория</label>
						<select class="form-control" name="category_id" style="width: 100%;">
							@foreach ($categories as $category)
							<option value="{{ $category->id }}"{{ $category->id == $post->category_id ? ' selected' : '' }}>{{ $category->title }}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<label for="tags">Теги</label>
						<select id="select2" class="select2" name="tag_ids[]" data-placeholder="Выберите теги" multiple="multiple" style="width: 100%;">
							@foreach ($tags as $tag)
								<option {{ in_array($tag->id, $post->tags->pluck('id')->all()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
							@endforeach
						</select>
					</div>
					<div class="img">
						<img width="200px" src="{{ asset('storage/' . $post->preview_image) }}" alt="" class="img-thumbnail">
					</div>
					
					<div class="form-group">
						<label for="preview_image">Добавить превью</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="preview_image">
								<label class="custom-file-label" for="preview_image">Выберите файл</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text">Загрузить</span>
							</div>
						</div>
						@error('preview_image')
						<div class="text-danger">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="img">
						<img width="200px" src="{{ asset('storage/' . $post->main_image) }}" alt="" class="img-thumbnail">
					</div>
					<div class="form-group">
						<label for="main_image">Добавить изображение</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="main_image">
								<label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text">Загрузить</span>
							</div>
						</div>
						@error('main_image')
						<div class="text-danger">
							{{$message}}
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