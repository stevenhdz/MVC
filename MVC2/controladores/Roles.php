<?php require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();

	switch ($accion) {
		case 'Ingresar':
			$rol->nombreP = $_POST['nombre'];
			$rol->precio = $_POST['precio'];
			$rol->categoria = $_POST['categoria'];
			$rol->stock = $_POST['stock'];
			$rol->fechaC = $_POST['fechaC'];
			$rol->fechaV = $_POST['fechaV'];
			$rol->referencia = $_POST['referencia'];
			$rol->ingresar();
			break;
		case 'Editar':
			$rol->id= base64_decode($_POST['id']);
			$rol->nombreP = $_POST['nombre'];
			$rol->precio = $_POST['precio'];
			$rol->categoria = $_POST['categoria'];
			$rol->stock = $_POST['stock'];
			$rol->fechaC = $_POST['fechaC'];
			$rol->fechaV = $_POST['fechaV'];
			$rol->referencia = $_POST['referencia'];
			$rol->editar();
			break;
		case 'elim':
			$rol->id = base64_decode($_GET['id']);
			$rol->eliminar();
			break;
		default:
		break;
	}
}

header('Location: ../vistas/roles');