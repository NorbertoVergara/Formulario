<?php
//Generación de código aleatorio
function generarCodigo() {
  $longitud = 6;
  $codigo = "";
  $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $maximo = strlen($caracteres) - 1;

  for ($i = 0; $i < $longitud; $i++) {
    $codigo .= $caracteres[random_int(0, $maximo)];
  }

  return $codigo;
}

//Cálculo de edad
function calcularEdad($fecha_nacimiento) {
  $fecha_nacimiento = new DateTime($fecha_nacimiento);
  $hoy = new DateTime();
  $edad = $hoy->diff($fecha_nacimiento);

  return $edad->y;
}

//Recopilación de datos
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$edad = calcularEdad($fecha_nacimiento);
$correo = $_POST["correo"];
$codigo = generarCodigo();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Aprendiz</title>
    <link rel="stylesheet" type="text/css" href="card.css">
  </head>
  <body>
    <div class="container">
      <div class="image-container">
        <img class="image" src="avatar.jpg" alt="Avatar">
      </div>
      <div class="text-container">
        <h1>Aprendiz</h1>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $apellidos; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
        <p><strong>Correo:</strong> <?php echo $correo; ?></p>
        <p><strong>Código de registro:</strong> <?php echo $codigo; ?></p>
      </div>
    </div>
  </body>
</html>
