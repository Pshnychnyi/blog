<!-- Sidebar -->
<div class="sidebar">
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="{{ route('admin.index') }}" class="nav-link"> <i class="nav-icon fas fa-home"></i></i><p> Главная</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.user.index') }}" class="nav-link"> <i class="nav-icon fas fa-users"></i></i><p> Пользователи</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.post.index') }}" class="nav-link"> <i class="nav-icon fas fa-newspaper"></i></i><p> Статьи</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.category.index') }}" class="nav-link"><i class="nav-icon fas fa-server"></i><p> Категории</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.tag.index') }}" class="nav-link"><i class="nav-icon fas fa-tags"></i><p> Теги</p></a>
			</li>
		</ul>
	</nav>   


</div>
<!-- /.sidebar -->