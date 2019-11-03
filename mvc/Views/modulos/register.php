<?php

session_start();

if(!$_SESSION["Ingreso"])

	header("location:index.php?ruta=enter");

	exit();



?>

	<br>
	<h1>NEW EMPLOYEE</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="Name" name="name" required>

		<input type="text" placeholder="Last Name" name="lastname" required>

		<input type="email" placeholder="Email" name="email" required>

		<input type="text" placeholder="Position" name="position" required>

		<input type="text" placeholder="Salary" name="salary" required>

		<input type="submit" value="Register">

	</form>