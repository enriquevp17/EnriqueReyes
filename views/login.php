<?php require_once('views/share/head.php'); ?>

<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/sargazo.jpg);">
			<a href="index.html"><img src="<?=base_url?>assets/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Ingrese a su <span>Cuenta</span></h2>
					<p>¿No tienes una cuenta? <a href="register.html">Crea uno aquí</a></p>
				</div>
				<form class="contact-bx" action="<?=base_url?>login/login" method="post" validate>
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Nombre</label>
									<input name="dzName" type="text" required="" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Contraseña</label>
									<input name="dzEmail" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Recuérdame</label>
								</div>
								<a href="forget-password.html" class="ml-auto">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Iniciar</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require_once('views/share/footer.php'); ?>
