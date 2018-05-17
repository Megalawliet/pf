<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data)$success = USER_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de registro de usuarios</title>

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div>
					<input name="dni" id="dni" type="text" class="form-control" placeholder="DNI"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="nom" id="nom" type="text" class="form-control" placeholder="Nom"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="cognom" id="cognom" type="text" class="form-control" placeholder="Cognom"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="naixement" id="naixement" type="date" class="form-control" placeholder="Data de naixement"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="adreca" id="adreca" type="text" class="form-control" placeholder="Adreça"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="nickname" id="nickname" type="text" class="form-control" placeholder="Username"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Correu electrònic"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="telefon" id="telefon" type="num" class="form-control" placeholder="Telèfon"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="provincia" id="provincia" type="text" class="form-control" placeholder="Província"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="poblacio" id="poblacio" type="text" class="form-control" placeholder="Població"> 
					<span class="help-block"></span>
				</div>
				<!--<div>
					<input name="admin" id="admin" type="boolval" class="form-control" placeholder="Administrador"> 
					<span class="help-block"></span>
				</div>-->				
				
				<!-- No tinc a la base de dades la validació de insersicó de la validació de la contrassenya -->
				<div>
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirmar Contraseña"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrarse</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Olvidó su contraseña? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php">  Iniciar sesión  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>
