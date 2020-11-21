<?php

require_once "php/controladores/plantilla.controlador.php";
require_once "php/controladores/usuarios.controlador.php";
require_once "php/controladores/categorias.controlador.php";
require_once "php/controladores/productos.controlador.php";
require_once "php/controladores/clientes.controlador.php";
require_once "php/controladores/ventas.controlador.php";

require_once "php/modelos/usuarios.modelo.php";
require_once "php/modelos/categorias.modelo.php";
require_once "php/modelos/productos.modelo.php";
require_once "php/modelos/clientes.modelo.php";
require_once "php/modelos/ventas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();