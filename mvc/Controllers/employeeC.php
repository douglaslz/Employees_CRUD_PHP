<?php

class employeeC{

	public function AddEmployeeC(){


		if(isset($_POST["nameR"])){


			//echo $_POST["nameR"];

			$datosC = array("name"=>$_POST["nameR"],
				"lastname"=>$_POST["lastnameR"],"email"=>$_POST["emailR"],"position"=>$_POST["positionR"],"salary"=>$_POST["salaryR"]);

			$tablaBD="employee";

			$respuesta = employeeM::AddEmployeeM($datosC,$tablaBD);

			if($respuesta == "It was added"){

				header("location:index.php?ruta=employees");
			}else{

				echo "error";
			}

		}
	}


	public function ShowEmployee(){

		$tablaBD = "employee";

		$respuesta = employeeM::ShowEmployeeM($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<tr>
				<td>'.$value["name"].'</td>
				<td>'.$value["lastname"].'</td>
				<td>'.$value["email"].'</td>
				<td>'.$value["position"].'</td>
				<td>$'.$value["salary"].'</td>

				<td><a href="index.php?ruta=edit&id='.$value["id"].'"><button>Edit</button></a></td>
				<td><a href="index.php?ruta=employees&idD='.$value["id"].'"><button>Delete</button></a></td>
			</tr>';
		}

	}


			public function EditEmployeeC(){

				$datosC = $_GET["id"];

				$tablaBD = "employee";

				$respuesta = employeeM::EditEmployeeM($datosC,$tablaBD);

				echo '<input type="hidden" value="'.$respuesta["id"].'" name="idE">

					  <input type="text" value="'.$respuesta["name"].'" placeholder="Name" name="nameE" required>

					  <input type="text" value="'.$respuesta["lastname"].'" placeholder="Last Name" name="lastnameE" required>

					  <input type="email" value="'.$respuesta["email"].'" placeholder="Email" name="emailE" required>

					  <input type="text" value="'.$respuesta["position"].'" placeholder="Position" name="positionE" required>

					  <input type="text" value="'.$respuesta["salary"].'" placeholder="Salary" name="salaryE" required>

					  <input type="submit" value="Update">';

					  


			}


			public function UpdateEmployeeC(){


				if(isset($_POST["nameE"])){

					 $datosC = array("id"=>$_POST["idE"],"name"=>$_POST["nameE"],"lastname"=>$_POST["lastnameE"],"email"=>$_POST["emailE"],"position"=>$_POST["positionE"],"salary"=>$_POST["salaryE"]);

				$tablaBD = "employee";

				$respuesta = employeeM::UpdateEmployeeM($datosC,$tablaBD);


				if($respuesta == "Good"){

					header("location:index.php?ruta=employees");

				}else{

				echo "error";
					}


				}


			}

			public function DeleteEmployee(){

					$respuesta = "dadassssssssssss";

				if(isset($_GET["idD"])){

					$datosC = $_GET["idD"];

					$tablaBD = "employee";

					$respuesta = employeeM::DeleteEmployeeM($datosC,$tablaBD);

					if($respuesta == "Good"){

						header("location:index.php?ruta=employees");

					}else{

						echo "error";
					}





				}
				//echo '<script>';
  				//echo 'console.log('. json_encode( $datos ) .')';
  				//echo '</script>';
			}




}



?>