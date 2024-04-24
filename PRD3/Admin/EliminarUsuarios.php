<script src="../js/Cerrar.js"></script>

<?php
require_once "../Database/Basedatos.php";
$conexionbd=mysqli_connect(server,user,password,database,port);
$query="SELECT * FROM `USUARIOS`;";
$resultado=mysqli_query($conexionbd,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar empleados</title>
<style type="text/css">
select{
font-size:20px;
margin:3px;
padding:3px;

}

</style>
<link rel="stylesheet" href="../estilosCss/fondo.css">
<link rel="stylesheet" href="../estilosCss/estilos.css">

</head>
<body>
    <div class="gradiente">
<a href="index.php" class="arriba_boton">Regresar</a>
<a Onclick="Close()" class="arriba_boton">Cerrar sesión</a>
<center>
<h1>Eliminar empleados</h1>
<form method="post">
<select id="Empleado" name="Empleado"class="SELE">
<?php
while($res=mysqli_fetch_assoc($resultado)){
echo"<option value='".$res["NOMBRE"]."'>".$res["NOMBRE"]."</option>";
}
?>
</select>
<select id="Sector" name="Sector" class="SELE">
<?php
$conexio=mysqli_connect(server,user,password,database,port);
$result=mysqli_query($conexio,$query);
while($resulta=mysqli_fetch_assoc($result)){
echo"<option value='".$resulta["SECTOR"]."'>".$resulta["SECTOR"]."</option>";
}
?>
</select>
<input type="submit" id="Enviar" name="Enviar" value="Eliminar" class="arriba_boton1">
</form>
<?php
if(ISSET($_POST["Enviar"])){
$conex=mysqli_connect(server,user,password,database,port);
$NOMBRE=$_POST["Empleado"];
$sector=$_POST["Sector"];
$que="DELETE FROM `USUARIOS` WHERE NOMBRE='".$NOMBRE."' AND SECTOR='".$sector."';";
$resu=mysqli_query($conex,$que);
if($resu){
echo"<script>alert('El empleado fue eliminado');document.location.href='EliminarUsuarios.php';</script>";
}
}
?>
</div>
</body>
</html>
