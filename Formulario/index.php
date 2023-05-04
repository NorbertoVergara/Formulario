<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Aprendiz</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h1>Formulario de Aprendiz</h1>
	<form action="card.php" method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" required><br><br>

		<label>Apellidos:</label>
		<input type="text" name="apellidos" required><br><br>

		<label>Fecha de Nacimiento:</label>
		<input type="date" name="fecha_nacimiento" required><br><br>

		<label>Correo:</label>
		<input type="email" name="correo" required><br><br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>
