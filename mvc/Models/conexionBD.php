<?php

class ConexionBD{

	public function cBD(){

		$bd = new PDO("mysql:host=localhost:3307;dbname=crud","root","password");


		return $bd;
	}
}



?>