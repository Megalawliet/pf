<?php session_start(); ?>
<html>
	<head>
		<title>Formulari de Registre</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nom d'usuari o e-mail</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'usuari">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrassenya</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrassenya">
		  </div>

		  <button type="submit" class="btn btn-default">Accedeix</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>
