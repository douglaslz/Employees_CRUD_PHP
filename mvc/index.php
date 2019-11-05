<?php

require_once('Controllers/routesC.php');
require_once('Controllers/adminC.php');
require_once('Controllers/employeeC.php');
 

require_once('Models/routesM.php');
require_once('Models/adminM.php');
require_once('Models/employeeM.php');

$rutas = new RoutesController();
$rutas -> Plantilla();


?>