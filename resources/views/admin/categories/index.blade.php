@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6">
				<a href="{{ route('admin.category.create') }}" class="btn btn-primary">Создать категорию</a>
			</div>
			<div class="col-sm-6">
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
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Список категорий</h3>
					</div>

					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th style="width: 10px">#</th>
									<th>Наименование</th>
									<th>Действия</th>
								</tr>
							</thead>
							<tbody>
								@if(!empty($categories))
								@foreach ($categories as $category)
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->title }}</td>
									<td class="text-center"  width="300px">
										<a href="{{ route('admin.category.show', ['id' => $category->id]) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a> 
										<a href="{{ route('admin.category.edit', ['category' => $category->id]) }}" class="btn btn-success"><i class="fas fa-edit"></i></a> 
										<form  class="d-inline" action="{{ route('admin.category.delete', ['id' => $category->id]) }}" method="post">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
											{{-- <a href="" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> --}}
										</form>
										
									</td>
								</tr>
								@endforeach
								@else
								<h3>Категорий пока нет..</h3>
								@endif
								
							</tbody>
						</table>
					</div>

					<div class="card-footer clearfix">
						{{ $categories->onEachSide(2)->links('vendor.pagination.bootstrap-4') }}
					</div>
				</div>
			</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection