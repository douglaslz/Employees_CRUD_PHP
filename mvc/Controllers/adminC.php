<?php
class AdminC{

	public function IngresoC(){

		if(isset($_POST["userI"])){

			$datosC = array("user" =>$_POST["userI"],"password" =>$_POST["passwordI"]);
			$tablaBD = "manager";
			$respuesta = AdminM:: IngresoM($datosC,$tablaBD);



			if($respuesta["user"] == $_POST["userI"] && $respuesta["password"] == $_POST["passwordI"]){

				session_start();

				$_SESSION["Ingreso"] = true;

				header("location:index.php?ruta=employees");
			}else{
				echo "Error to login";
			}

		}
	}
}

?>