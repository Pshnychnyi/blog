@extends('personal.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Главная</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('personal.index') }}">Главная</a></li>
					<li class="breadcrumb-item active">Главная</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>{{ $countComments }}</h3>

						<p>Комментарии</p>
					</div>
					<div class="icon">
						<i class="fas fa-comments"></i>
					</div>
					<a href="{{ route('personal.comment.index') }}" class="small-box-footer">Подробнее <i class="fas fa-chevron-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3>{{ $countLikedPosts }}</h3>

						<p>Понравившиеся статьи</p>
					</div>
					<div class="icon">
						<i class="far fa-heart"></i>
					</div>
					<a href="{{ route('personal.like.index') }}" class="small-box-footer">Подробнее <i class="fas fa-chevron-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			
		</div>
		<!-- /.row -->
		<!-- Main row -->
		<div class="row">
			
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection