<?php

session_start();

if(!$_SESSION["Ingreso"]){
	header("location:index.php?ruta=enter");

	exit();
}



?>



	<br>
	<h1>Employees</h1>

	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Position</th>
				<th>Salary</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			


			<?php

				$mostrar = new employeeC();
				$mostrar -> ShowEmployee();

			?>

		</tbody>

	</table>

			<?php

				$eliminar = new employeeC();
				$eliminar -> DeleteEmployee();

			?>

