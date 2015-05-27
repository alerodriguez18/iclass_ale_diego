<header>
	<nav class="navbar navbar-default Header-navbar">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-home NavbarMenu-item"></span></a>
			<!-- Se mostraran cuando se haga responsive -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Temas</a></li>
					<li><a href="#">Ligas</a></li>
					<li><a href="#">Documentos</a></li>
					<li><a href="#">Planeación</a></li>
					<li><a href="#">Miembros de la clase</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle NabbarMenu-item" data-toggle="dropdown" role="button" aria-expanded="false">Clases <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="NavbarMenu-item">Unirse a clase</a></li>
							<li><a href="#" class="NavbarMenu-item">Crear clase</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar amigos">						
						<button type="submit" class="btn btn-success">Buscar</button>
					</div>
				</form>
				
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p class="navbar-btn">
							<a href="#" class="btn btn-primary">Tareas <span class="badge">5</span></a>
							<a href="#" class="btn btn-primary">Notificaciones <span class="badge">5</span></a>
						</p>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" arial-expanded="false">Perfil <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" >Mi Perfil</a></li>
							<li><a href="#" class="NavbarMenu-item">Editar Perfil</a></li>
							<li class="divider NavbarMenu-item"></li>
							<li><a href="#" class="NavbarMenu-item">Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<figure>
					<img src="../static/images/avatar.jpeg" alt="Imagen Usuario" class="Header-imageUser">
				</figure>
			</div>
			<div class="col-sm-5">
				<label class="Username-label">Diego Ramirez</label>
			</div>
		</div>
	</div>
</header>