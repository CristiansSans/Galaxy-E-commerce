<?php  
require_once 'models/conexion.php';
require_once 'models/consulta.php';
require_once 'models/login.php';
require_once 'models/signup.php';
require_once 'models/enlaces.php';
require_once 'models/gestorProductos.php';
require_once 'models/ingresoProducto.php';
require_once 'models/addCarritoSinTabla.php';
require_once 'models/eliminarTablaCarrito.php';
require_once 'models/ArticulosCarrito.php';
require_once 'models/cambiarCantidadCarrito.php';

require_once 'controllers/enlaces.php';
require_once 'controllers/login.php';
require_once 'controllers/signup.php';
require_once 'controllers/template.php';
require_once 'controllers/gestorProductos.php';
require_once 'controllers/ingresoProducto.php';
require_once 'controllers/addCarritoSinTabla.php';
require_once 'controllers/eliminarTablaCarrito.php';
require_once 'controllers/ArticulosCarrito.php';
require_once 'controllers/cambiarCantidadCarrito.php';

$template = new templateControllers();
$template -> template();