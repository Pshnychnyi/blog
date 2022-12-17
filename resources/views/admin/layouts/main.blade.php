<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Select 2 -->
	<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
	<!-- Summernote -->
	<link rel="stylesheet" href="{{asset('plugins/summernote/summernote.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<div class="col-md-12 d-flex justify-content-between">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<form action="{{ route('logout') }}" method="post">
							@csrf
							<input type="submit" class="btn btn-block btn-light" value="Выйти">
						</form>
					</li>
				</ul>
			</div>
			
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			@include('admin.includes.sidebar')
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@include('admin.includes.errors')
			@yield('content')
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="#">Pshenychnyi&Co</a>.</strong>
			Blog
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
	<!-- overlayScrollbars -->
	<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('dist/js/adminlte.js')}}"></script>
	<!-- Summernote -->
	<script src="{{asset('plugins/summernote/summernote.js')}}"></script>
	<script> $('#summernote').summernote();</script>
	<!-- Select 2 -->
	<script src="{{asset('plugins/select2/js/select2.full.js')}}"></script>
	<script> $('#select2').select2();</script>
	<!-- bs custom -->
	<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.js')}}"></script>
	<script>
		$(function() {
			bsCustomFileInput.init();
		})
	</script>
	

</body>
</html>
