<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registre</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Nom d'suari</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'usuari">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nom Complet</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nom Complet">
		  </div>
		  <div class="form-group">
		    <label for="email">Correu Electrònic</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correu Electrònic">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrassenya</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrassenya">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirma la Contrassenya</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrassenya">
		  </div>

		  <button type="submit" class="btn btn-default">Registra't</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>