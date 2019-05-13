
		<script src="<?=base_url?>assets/vendors/calendar/moment.min.js"></script>
		<script src="<?=base_url?>assets/vendors/calendar/fullcalendar.js"></script>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Tablero</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
					<li>Tablero</li>
				</ul>
			</div>
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">
						<div class="wc-item">
							<h4 class="wc-title">
								Lugares Afectados
							</h4>
							<span class="wc-des">
								Sargazo en Mahahual
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Procentaje: 
								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								 Recolección de sargazo
							</h4>
							<span class="wc-des">
								Actividades realizadas
							</span>
							<span class="wc-stats counter">
								180
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 38%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Porcentaje:
								</span>
								<span class="wc-number ml-auto">
									38%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">
						<div class="wc-item">
							<h4 class="wc-title">
								Avistamiento de sargazo
							</h4>
							<span class="wc-des">
								Reporte de sargazo
							</span>
							<span class="wc-stats counter">
								350
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Porcentaje:
								</span>
								<span class="wc-number ml-auto">
									50%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
						<div class="wc-item">
							<h4 class="wc-title">
								Nuevos Usuarios
							</h4>
							<span class="wc-des">
								Usuario nuevo registrado
							</span>
							<span class="wc-stats counter">
								1
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Actividades realizadas</h4>
						</div>
						<div class="widget-inner">
							<canvas id="chart" width="100" height="45"></canvas>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-lg-4 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Notificaciones</h4>
						</div>
						<div class="widget-inner">
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Elzner Sánchez</span> te envió un mensaje.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Nuevo Registro</span>  Alan Oswaldo se registro.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 Mayo</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Enrique Reyes</a> Porque no han hecho nada en Mahahual.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 Julio</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Gobierno del Estado</span>  Segundo reporte de recolección de sargazo.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Nuevo lugares registrados</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								<ul>
									<li>
										<span class="new-users-pic">
											<img src="<?=base_url?>assets/images/testimonials/pic1.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Alondra Díaz </a>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline red">Nuevo lugar</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="<?=base_url?>assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Jorge Kú</a>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline red">Nuevo lugar</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="<?=base_url?>assets/images/testimonials/pic1.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Josefa Lagunes</a>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline red">Nuevo lugar</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="<?=base_url?>assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Victor Pérez</a>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline red">Nuevo lugar</a>
										</span>
									</li>
									<li>
										<span class="new-users-pic">
											<img src="<?=base_url?>assets/images/testimonials/pic3.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Carlos Villar</a>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline red">Nuevo Lugar</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Publicaciones</h4>
						</div>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Karla Marquez</a>
											<span class="orders-info">2/06/2018</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Publicación</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Rodolfo Miam</a>
											<span class="orders-info">5/03/2018</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Publicación</a>
										</span>
									</li>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Gobierno del Estado</a>
											<span class="orders-info">12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm green">Publicación</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
				
				
