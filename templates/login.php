
<?php require_once('head.php');?>

	<div class="container">					
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="container-principalLogin">
						<div class="container-login">
							<div class="welcome-labels">
								<span class="label label-info welcome-toIclass">Bienvenido a IClass!!!</span>
								<span class="question-Login">Eres parte de IClass? Entra.</span>
							</div>
							<div class="input-group input-Username">
								<span class="input-group-addon glyphicon glyphicon-user" id="username-addon"></span>
								<input type="text" class="form-control" placeholder="Username" area-describebyid="username-addon">
							</div>
							<div class="input-group input-Password">
								<span class="input-group-addon glyphicon glyphicon-lock" id="password-addon"></span>
								<input type="password" class="form-control" placeholder="Password" area-describebyid="password-addon">
							</div>
							<div class="remember-passwordLabel">
								<input type="checkbox">
								<span>Recuerdame mi contraseña.</span>
							</div>
							<button class="btn btn-block btn-success">Inicia sesión</button>
							<div class="Forgot-password">
								<a href="#">Olvidaste tu contraseña?</a>
								<a href="#">No tienes una cuenta? Crea una!!</a>
							</div>
						</div>					
					</div>
				</div>
		</div>
	</div>
<?php require_once('footer.php');?>