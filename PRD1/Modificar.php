<?php
require_once("Basedatos.php");
$conexion=mysqli_connect(server,user,password,database,port);
if(!empty($_GET["ID"])){
    $id=$_GET["ID"];

    $query="SELECT * FROM `REGISTRO` WHERE id=$id;";
    $resultado=mysqli_query($conexion,$query);
    if($registro=mysqli_fetch_assoc($resultado)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<center>
<h1>Encuesta</h1>



<form method='post'>
<label for="Nombre">Nombre:</label>
<input type='text' id='Nombre' name='Nombre' value='<?php echo $registro["Nombre"];?>'>
<label for="Telefono">Telefono</label>
<input type='text' id='Telefono' name='Telefono' value='<?php echo $registro["Telefono"];?>'>
<label for="Correo">Correo:</label>
<input type='text' id='Correo' name='Correo' value='<?php echo $registro["Correo"];?>'>

<label for="Clave">Clave de elector</label>
<input type='text' id='Clave' name='Clave' value='<?php echo $registro["CLAVE_ELECTOR"];?>'></input>
<br/>
<label for="CURP">Zona:</label>
<input type='text' id='CURP' name='CURP' value='<?php echo $registro["CURP"];?>'></input>

<label for="SECCION">SECCION:</label>
<input type='text' id='SECCION' name='SECCION'value='<?php echo $registro["SECCION"];?>'></input>
<input type="submit" id="enviar" name="enviar">
</form>

<?php
//require_once "Basedatos.php";

if(ISSET($_POST["enviar"])){
$conexionbd=mysqli_connect(server,user,password,database,port);
$DB=database;
$Nombre =$_POST["Nombre"];
$Telefono =$_POST["Telefono"];
$Correo =$_POST["Correo"];
$CLAVE_ELECTOR =$_POST["Clave"];
$CURP =$_POST["CURP"];
$SECCION=$_POST["SECCION"];



$query="UPDATE `REGISTRO` SET `Nombre`='$Nombre',`Telefono`='$Telefono',`Correo`='$Correo',`CLAVE_ELECTOR`='$CLAVE_ELECTOR',`CURP`='$CURP', `SECCION`='$SECCION' WHERE id=$id;";
echo $query;
$resultado=mysqli_query( $conexionbd, $query);
if($resultado){
    echo "<script>alert('Edicion exitosa');document.location.href='Resultados.php'</script>";
}
}
    }
}
?>

