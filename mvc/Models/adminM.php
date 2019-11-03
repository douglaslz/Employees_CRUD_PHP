<?php


require_once("conexionBD.php");


class AdminM extends ConexionBD{

	static public function IngresoM($datosC,$tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT user, password FROM manager WHERE user = :user");

		$pdo -> bindParam(":user", $datosC["user"], PDO::PARAM_STR);

		$pdo -> execute();

		return $pdo->fetch();

		$pdo->close();
	}
}

?>