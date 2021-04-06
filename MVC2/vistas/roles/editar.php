<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Roles.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $rol[1] ?>" required autofocus />
		<input name="precio" placeholder="precio" value="<?= $rol[2] ?>" required autofocus />
		<input name="categoria" placeholder="categoria" value="<?= $rol[3] ?>" required autofocus />
		<input name="stock" placeholder="stock" value="<?= $rol[4] ?>" required autofocus />
		<input name="fechaC" placeholder="fechaC" value="<?= $rol[5] ?>" required autofocus />
		<input name="fechaV" placeholder="fechaV" value="<?= $rol[6] ?>" required autofocus />
		<input name="referencia" placeholder="referencia" value="<?= $rol[7] ?>" required autofocus />
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>