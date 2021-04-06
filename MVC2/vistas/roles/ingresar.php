<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Roles.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre"  required autofocus />	
		<input type="number" name="precio" placeholder="precio"  required autofocus />
		<input type="text" name="categoria" placeholder="categoria"  required autofocus />
		<input type="number" name="stock" placeholder="stock"  required autofocus />
		<input type="date" name="fechaC" placeholder="fechaC"  required autofocus />
		<input type="datetime" name="fechaV" placeholder="fechaV" autofocus />
		<input type="text" name="referencia" placeholder="referencia"  required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>