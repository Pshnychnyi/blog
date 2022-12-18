<!-- Sidebar -->
<div class="sidebar">
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="{{ route('personal.index') }}" class="nav-link"><i class="nav-icon fas fa-home"></i></i><p> Главная</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('personal.like.index') }}" class="nav-link"><i class="nav-icon far fa-heart"></i></i><p> Понравившиеся статьи</p></a>
			</li>
			<li class="nav-item">
				<a href="{{ route('personal.comment.index') }}" class="nav-link"><i class="nav-icon fas fa-comments"></i></i></i><p> Мои комментарии</p></a>
			</li>
			
		</ul>
	</nav>   


</div>
<!-- /.sidebar -->