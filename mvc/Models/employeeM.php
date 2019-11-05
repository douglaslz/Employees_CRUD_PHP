<?php

require_once "conexionBD.php";


class employeeM extends conexionBD{

	static public function AddEmployeeM($datosC,$tablaBD){

		$pdo = conexionBD::cBD()->prepare("INSERT INTO $tablaBD (name,lastname,email,position,salary) values (:name,:lastname,:email,:position,:salary)");

		$pdo -> bindParam(":name",$datosC["name"],PDO::PARAM_STR);
		$pdo -> bindParam(":lastname",$datosC["lastname"],PDO::PARAM_STR);
		$pdo -> bindParam(":email",$datosC["email"],PDO::PARAM_STR);
		$pdo -> bindParam(":position",$datosC["position"],PDO::PARAM_STR);
		$pdo -> bindParam(":salary",$datosC["salary"],PDO::PARAM_STR);


		if($pdo -> execute()){

			return "It was added";
		}else{
			return "error";
		}

		$pdo -> close();

	}

	static public function ShowEmployeeM($tablaBD){

		$pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetchAll();

		$pdo -> close();

	}

	static public function EditEmployeeM($datosC,$tablaBD){

		$pdo = conexionBD::cBD()->prepare("SELECT id, name, lastname, email, position, salary FROM $tablaBD WHERE id = :id");
		
		$pdo -> bindParam("id",$datosC,PDO::PARAM_INT);		

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

	}


	static public function UpdateEmployeeM($datosC,$tablaBD){

		$pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET name = :name, lastname = :lastname , email = :email ,position =:position , salary = :salary WHERE id = :id");


		
		$pdo -> bindParam(":id",$datosC["id"],PDO::PARAM_INT);
		$pdo -> bindParam(":name",$datosC["name"],PDO::PARAM_STR);
		$pdo -> bindParam(":lastname",$datosC["lastname"],PDO::PARAM_STR);
		$pdo -> bindParam(":email",$datosC["email"],PDO::PARAM_STR);
		$pdo -> bindParam(":position",$datosC["position"],PDO::PARAM_STR);
		$pdo -> bindParam(":salary",$datosC["salary"],PDO::PARAM_STR);


		if($pdo -> execute()){

			return "Good";

		}else{

			return "Error";
		}

		$pdo -> close();

	}

	static public function DeleteEmployeeM($datosC,$tablaBD){


				echo '<script>';
  				echo 'console.log('. json_encode( "jkhkfdsjhfkjsdhkjfh" ) .')';
  				echo '</script>';


		$pdo = conexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id",$datosC,PDO::PARAM_INT);

		if($pdo -> execute()){

			return "Good";

		}else{
			
			return "Error";
		}

		$pdo -> close();


	}

}

?>