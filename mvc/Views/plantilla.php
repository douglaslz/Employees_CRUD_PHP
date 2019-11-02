
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="Views/css/estilos.css">

</head>

<body>

<?php

include "modulos/menu.php";


?>

<section>


<?php

$rutas = new RoutesController();
$rutas -> Rutas();
//include "Views/modulos/enter.php";


?>

</section>
	
</body>

</html>