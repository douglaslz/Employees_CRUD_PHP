<?php

session_start();

if(!$_SESSION["Ingreso"]){

	header("location:index.php?ruta=enter");

	exit();
}


?>

	<br>
	<h1>EDIT</h1>

	<form method="post">
		
	
		<?php
		
		$editar = new employeeC();
		$editar -> EditEmployeeC();


		$actializar = new employeeC();
		$actializar -> UpdateEmployeeC();

		?>

	</form>

	