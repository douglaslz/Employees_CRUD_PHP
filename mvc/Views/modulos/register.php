<?php

session_start();

if(!$_SESSION["Ingreso"]){

	header("location:index.php?ruta=enter");

	exit();
}


?>

	<br>
	<h1>NEW EMPLOYEE</h1>

	<form method="post">
		
		<input type="text" placeholder="Name" name="nameR" required>

		<input type="text" placeholder="Last Name" name="lastnameR" required>

		<input type="email" placeholder="Email" name="emailR" required>

		<input type="text" placeholder="Position" name="positionR" required>

		<input type="text" placeholder="Salary" name="salaryR" required>

		<input type="submit" value="Register">

	</form>

	<?php

		$registrar = new employeeC();
		$registrar -> AddEmployeeC();
	?>