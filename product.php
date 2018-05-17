<?php
/*
 *
 * Creem la classe producte
 * 
 */

class Producte{
	
	public $id_rod;
	public $nom_prod;
	public $decripcio;
	public $preu;
	public $ruta;
	
	public function __construct($arg_nom_prod="", $arg_descripcio="", $arg_preu="", $arg_ruta="")
	{
		$this->nom=$arg_nom_prod;
		$this->descripcio=$arg_descripcio;
		$this->preu=$arg_preu;
		$this->ruta=$arg_ruta;
	}
}


?>
