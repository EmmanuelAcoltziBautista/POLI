<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../estilosCss/administrador.css">
    <link rel="stylesheet" href="../estilosCss/estilos.css">

</head>
<script src="../js/Cerrar.js"></script>
<body>
    <div class="gradiente">
<a Onclick="Close()" class="arriba_boton">Cerrar sesión</a>
<center>
<h1>Administrador</h1>
<div class="contenedor">
<a href="CrearUsuarios.php" class="menu"><img src="../images/addUser.png" class="menuI">Agregar empleado</a>

<a href="EliminarUsuarios.php" class="menu"><img src="../images/DeleteUser.png" class="menuI">Eliminar empleado</a>

<a href="Resultados.php" class="menu"><img src="../images/editar.png" class="menuI">Resultados filtrados</a>

<a href="ResultadosTotales.php" class="menu"><img src="../images/editar.png" class="menuI">Resultados totales</a>

<a onclick="alert('Amaneciendo');" class="menu"><img src="../images/editar.png" class="menuI">Graficas</a>
</div>
</center>
</div>
</body>
</html>
