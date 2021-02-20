<!doctype html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('titulo') | Alan Jaziel Martínez Mejia</title>
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/nucleo.css') }}" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
			integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
			crossorigin="anonymous"/>
	<!-- Argon CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/argon.min.css') }}" type="text/css">
	<style>
		.active {
			background: #5e72e4 !important;
			color: white !important;
		}

		.active i {
			color: white !important;
		}
	</style>
	@yield('links')
</head>
<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
	<div class="scrollbar-inner">
		<!-- Brand -->
		<div class="sidenav-header  align-items-center">
			<a class="navbar-brand" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">
				<img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
			</a>
		</div>
		<div class="navbar-inner">
			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<!-- Nav items -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}"
							href="{{ url('/') }}">
							<i class="fas fa-home text-primary"></i>
							<span class="nav-link-text">Inicio</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ preg_match('.profesores.',Request::path()) ? 'active' : '' }}"
							href="{{ route('profesores.index') }}">
							<i class="fas fa-chalkboard-teacher text-primary"></i>
							<span class="nav-link-text">Profesores</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ preg_match('.materias.',Request::path()) ? 'active' : '' }}"
							href="{{ route('materias.index') }}">
							<i class="fas fa-calculator text-primary"></i>
							<span class="nav-link-text">Materias</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ preg_match('.aulas.',Request::path()) ? 'active' : '' }}"
							href="{{ route('aulas.index') }}">
							<i class="fas fa-chalkboard text-primary"></i>
							<span class="nav-link-text">Aulas</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ preg_match('.grupos.',Request::path()) ? 'active' : '' }}"
							href="{{ route('grupos.index') }}">
							<i class="fas fa-users text-primary"></i>
							<span class="nav-link-text">Grupos</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
	<!-- Topnav -->
	<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Search form -->
				<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative input-group-merge">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Search" type="text">
						</div>
					</div>
					<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
							  aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</form>
				<!-- Navbar links -->
				<ul class="navbar-nav align-items-center  ml-md-auto ">
					<li class="nav-item d-xl-none">
						<!-- Sidenav toggler -->
						<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
							  data-target="#sidenav-main">
							<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
							</div>
						</div>
					</li>
					<li class="nav-item d-sm-none">
						<a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
							<i class="ni ni-zoom-split-in"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="ni ni-bell-55"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
							<!-- Dropdown header -->
							<div class="px-3 py-3">
								<h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
									notifications.</h6>
							</div>
							<!-- List group -->
							<div class="list-group list-group-flush">
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="../assets/img/theme/team-1.jpg"
												  class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="../assets/img/theme/team-2.jpg"
												  class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>3 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="../assets/img/theme/team-3.jpg"
												  class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>5 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Your posts have been liked a lot.</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="../assets/img/theme/team-4.jpg"
												  class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="../assets/img/theme/team-5.jpg"
												  class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>3 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
										</div>
									</div>
								</a>
							</div>
							<!-- View all -->
							<a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View
								all</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="ni ni-ungroup"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
							<div class="row shortcuts px-4">
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                      <i class="ni ni-calendar-grid-58"></i>
                                    </span>
									<small>Calendar</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                      <i class="ni ni-email-83"></i>
                                    </span>
									<small>Email</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                      <i class="ni ni-credit-card"></i>
                                    </span>
									<small>Payments</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                      <i class="ni ni-books"></i>
                                    </span>
									<small>Reports</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                      <i class="ni ni-pin-3"></i>
                                    </span>
									<small>Maps</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                      <i class="ni ni-basket"></i>
                                    </span>
									<small>Shop</small>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Header -->
	<div class="header bg-primary pb-6">
		<div class="container-fluid">
			<div class="header-body">
				@yield('contenido-header')
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="container-fluid mt--6">
		@yield('contenido')

		{{--        <footer class="footer pt-0">--}}
		{{--            <div class="row align-items-center justify-content-lg-between">--}}
		{{--                <div class="col-lg-6">--}}
		{{--                    <div class="copyright text-center  text-lg-left  text-muted">--}}
		{{--                        &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"--}}
		{{--                                       target="_blank">Creative Tim</a>--}}
		{{--                    </div>--}}
		{{--                </div>--}}
		{{--                <div class="col-lg-6">--}}
		{{--                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">--}}
		{{--                        <li class="nav-item">--}}
		{{--                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>--}}
		{{--                        </li>--}}
		{{--                        <li class="nav-item">--}}
		{{--                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About--}}
		{{--                                Us</a>--}}
		{{--                        </li>--}}
		{{--                        <li class="nav-item">--}}
		{{--                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>--}}
		{{--                        </li>--}}
		{{--                        <li class="nav-item">--}}
		{{--                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"--}}
		{{--                               class="nav-link" target="_blank">MIT License</a>--}}
		{{--                        </li>--}}
		{{--                    </ul>--}}
		{{--                </div>--}}
		{{--            </div>--}}
		{{--        </footer>--}}
	</div>
</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js.cookie.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-scrollLock.min.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('assets/js/argon.js') }}"></script>
</body>
</html>
