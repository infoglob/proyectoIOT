<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/datepicker3.css" />


		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/morris/morris.css" />


		<!-- Theme CSS -->
		<link rel="stylesheet" href="stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="stylesheets/theme-custom.css" />

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{asset('images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">Diego Pereira</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Mi Perfil</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Bloquear Pantalla</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Cerrar Cesión</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">


				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navegación
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">

									<!-- PRINCIPAL-->
									<li class="nav-active">
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Principal</span>
										</a>
									</li>

									<!-- PANEL DE CONTROL-->
									<li>
										<a href="mailbox-folder.html">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Panel de Control</span>
										</a>
									</li>

									<!-- DISPOSITIVOS-->
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Dispositivos</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{url('dispositivos')}}">
													 Lista de Dispositivos
												</a>
											</li>
											
										</ul>

										<ul class="nav nav-children">
											<li>
												<a href="{{url('tipos_de_dispositivos')}}">
													 Tipos de Dispositivos
												</a>
											</li>
										</ul>
									</li>
		
									<!-- COMANDOS -->
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Comandos</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.html">
													 Menu1
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													 Menu2
												</a>
											</li>
											
										</ul>
									</li>

									<!-- HISTORICO -->
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Histórico </span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.html">
													 Menu1
												</a>
											</li>

											<li>
												<a href="forms-advanced.html">
													 Menu2
												</a>
											</li>
											
										</ul>
									</li>

									<!-- USUARIOS -->
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Usuarios</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a>Permisos</a>
											</li>
											
										</ul>
									</li>
								</ul>
							</nav>

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->




				<!-- PAGINA PRINCIPAL CENTRAL-->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Principal</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Principal</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<section class="panel">
						<div class="panel-body">
							
							@yield('contenido')

						</div>
					</section>		


					<!--/ FIN PAGINA PRINCIPAL CENTRAL-->
				</section>				

				<!--/ FIN inner-wrapper-->
			</div>

			<!--/ FIN del Body-->
		</section>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/magnific-popup/magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="vendor/jquery-appear/jquery.appear.js"></script>
		<script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="vendor/flot/jquery.flot.js"></script>
		<script src="vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="vendor/flot/jquery.flot.pie.js"></script>
		<script src="vendor/flot/jquery.flot.categories.js"></script>
		<script src="vendor/flot/jquery.flot.resize.js"></script>
		<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="vendor/raphael/raphael.js"></script>
		<script src="vendor/morris/morris.js"></script>
		<script src="vendor/gauge/gauge.js"></script>
		<script src="vendor/snap-svg/snap.svg.js"></script>
		<script src="vendor/liquid-meter/liquid.meter.js"></script>
		<script src="vendor/jqvmap/jquery.vmap.js"></script>
		<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		
		<!-- Theme Base, Components and Settings -->
		<script src="javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="javascripts/theme.custom.js"></script>

		
		<!-- Theme Initialization Files -->
		<script src="javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="javascripts/dashboard/examples.dashboard.js"></script>


		<!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!--Select2-->
<script src="vendor/select2/select2.min.js"></script>

  



  <!-- DataTables -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



  <script>
    $(document).ready( function () {
    $('#tabla').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });

    @yield("javascript")


    } );
  </script>	


	</body>
</html>