<?php

require_once('Controllers/routesC.php');
require_once('Controllers/adminC.php');
 

require_once('Models/routesM.php');
require_once('Models/adminM.php');

$rutas = new RoutesController();
$rutas -> Plantilla();


?>