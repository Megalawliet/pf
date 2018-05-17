<?php
include_once "conexion.php";


if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			
			$id_usuari=null;
			$sql1= "select * from usuaris where (nickname=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
		
			var_dump($query);
			while ($r=$query->fetch_array()) {
				$id_usuari=$r["id_usuari"];
				echo $id_usuari;
				break;
			}
			/*if($id_usuari==null){
				print "<script>alert(\"Accés denegat.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}*/
		}
	}
}



?>
