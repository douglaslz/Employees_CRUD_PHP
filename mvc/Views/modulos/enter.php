

	<br>
	<h1>Sign In</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="User" name="userI" required>

		<input type="password" placeholder="Password" name="passwordI" required>

		<input type="submit" value="Sign In">

	</form>

<?php

$ingreso = new AdminC();
$ingreso -> IngresoC();
?>