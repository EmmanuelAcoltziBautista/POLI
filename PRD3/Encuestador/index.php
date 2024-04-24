<script src="../js/Cerrar.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../estilosCss/fondo.css">
<link rel="stylesheet" href="../estilosCss/estilos.css">

</head>
<body>
<div class="gradiente">
<header class="Botones">
<a Onclick="Close()" class="arriba_boton">Cerrar sesión</a>
</header>
<center>
<h1>Encuesta</h1>



<form method='post'>
<label for="Nombre">Nombre:</label>
<input type='text' id='Nombre' name='Nombre' >
<label for="Telefono">Telefono</label>
<input type='text' id='Telefono' name='Telefono'>
<label for="Correo">Correo:</label>
<input type='text' id='Correo' name='Correo' </input>

<label for="Clave">Clave de elector</label>
<input type='text' id='Clave' name='Clave' ></input>
<br/>
<label for="CURP">Zona:</label>
<select id="CURP" name="CURP" class="SELE">
<?php
for($i=1;$i<=8;$i++){


?>    
<option class="SELE" value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select>

<!--input type='text' id='CURP' name='CURP' ></input-->

<label for="SECCION">SECCION:</label>
<select id="SECCION" name="SECCION" class="SELE">
<?php
for($i=127;$i<=157;$i++){


?>    
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select>
<!--input type='text' id='SECCION' name='SECCION'></input-->

<input type="submit" id="enviar" name="enviar" value="Subir" class="arriba_boton1">
</form>

<?php
require_once "../Database/Basedatos.php";

if(ISSET($_POST["enviar"])){
$conexionbd=mysqli_connect(server,user,password,database,port);
$DB=database;
$Nombre =$_POST["Nombre"];
$Telefono =$_POST["Telefono"];
$Correo =$_POST["Correo"];
$CLAVE_ELECTOR =$_POST["Clave"];
$CURP =$_POST["CURP"];
$SECCION=$_POST["SECCION"];



$query="INSERT INTO `$DB`.`REGISTRO` (`id`,`Nombre`,`Telefono`,`Correo`,`CLAVE_ELECTOR`,`CURP`,`SECCION`) VALUES 
('0','$Nombre','$Telefono','$Correo','$CLAVE_ELECTOR','$CURP','$SECCION');";
//echo $query;
$resultado=mysqli_query( $conexionbd, $query);
if($resultado){
    echo "<script>alert('Registro exitoso');</script>";
}
}

?>
</div>
</body>
</html>
