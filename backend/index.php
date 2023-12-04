<?php  
require_once 'models/conexion.php';
require_once 'models/consulta.php';
require_once 'models/login.php';
require_once 'models/signup.php';
require_once 'models/enlaces.php';
require_once 'models/gestorProductos.php';
require_once 'models/ingresoProducto.php';
require_once 'models/gestorVentas.php';
require_once 'models/comprobarVenta.php';

require_once 'controllers/enlaces.php';
require_once 'controllers/login.php';
require_once 'controllers/signup.php';
require_once 'controllers/verProducto.php';
require_once 'controllers/gestorProductos.php';
require_once 'controllers/ingresoProducto.php';
require_once 'controllers/gestorVentas.php';
require_once 'controllers/template.php';
require_once 'controllers/comprobarVenta.php';

$template = new templateControllers();
$template -> template();