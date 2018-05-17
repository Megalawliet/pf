<?php
include "conexion.php";

if(!empty($_POST)){
	if(isset($_POST["dni"]) &&isset($_POST["nom"]) &&isset($_POST["cognom"]) &&isset($_POST["naixement"]) &&isset($_POST["adreca"]) &&isset($_POST["nickname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["telefon"]) &&isset($_POST["provincia"]) &&isset($_POST["poblacio"])){
		if($_POST["dni"]!=""&& $_POST["nom"]!=""&& $_POST["cognom"]!=""&& $_POST["naixement"]!=""&& $_POST["adreca"]!=""&&$_POST["nickname"]!=""&&$_POST["email"]!="" &&$_POST["password"]!=""&&$_POST["telefon"]!=""&&$_POST["provincia"]!=""&&$_POST["poblacio"]==$_POST["confirm_password"]){
			
		
			
			$found=false;
			$sql1= "select * from usuaris where nickname=\"$_POST[nickname]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nom d'usuari o email ja existents.\");window.location='../registro.php';</script>";
			}
			/*estic per aqui*/
			$sql = "insert into usuaris(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>
