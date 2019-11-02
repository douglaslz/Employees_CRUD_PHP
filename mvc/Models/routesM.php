<?php

class Modelo{
	static public function RutasModelo($rutas){

		
		
		if($rutas == "enter" || $rutas == "register" || $rutas == "employees" || $rutas == "exit"){

			$pagina = 'Views/modulos/'.$rutas.'.php';
		
			

		}else if($rutas =="index"){

			$pagina = "Views/modulos/enter.php";

		}else{

			$pagina = "Views/modulos/enter.php";			
		}


		

		return $pagina;

	}
}


?>