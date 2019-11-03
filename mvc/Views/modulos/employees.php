<?php

session_start();

if(!$_SESSION["Ingreso"])

	header("location:index.php?ruta=enter");

	exit();



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
			
			<tr>
				<td>Douglas</td>
				<td>Loaiza</td>
				<td>douglaslz@hotmail.com</td>
				<td>Programador PHP</td>
				<td>$ 8.000</td>
				<td><button>Edit</button></td>
				<td><button>Delete</button></td>
			</tr>

		</tbody>

	</table>

