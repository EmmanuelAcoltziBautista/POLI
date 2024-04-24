<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../estilosCss/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
</head>
<body>

<header class="Botones">
<a class="arriba_boton"  href="index.php">Regresar</a>

<a Onclick="Close()" class="arriba_boton">Cerrar sesión</a>
</header>
<section></section>
<footer></footer>

    
</body>
</html>

<script src="../js/Cerrar.js"></script>





<?php
require_once "../Database/Basedatos.php";
$query="select SECCION, count(SECCION) as Cantidad from REGISTRO group by SECCION; ";
$conexionbd=mysqli_connect(server,user,password,database,port);
$resultado=mysqli_query($conexionbd, $query);
while($fila = mysqli_fetch_assoc($resultado)){


?>


<div id="contenedor" class="contenedor">
    <div id="<?php echo $fila['SECCION'];?>"><?php echo $fila['SECCION']."--".$fila["Cantidad"];?></div>

</div>

<?php
}
?>


<script>
/*const colores1='rgb('+255+','+0+','+0+')';
var Ancho1=document.getElementById("pos1").style.position=fixed;

var Color1=document.getElementById("pos1").style.backgroundColor=colores1;
var Ancho1=document.getElementById("pos1").style.width=10;
var Alto1=document.getElementById("pos1").style.height=20;
*/</script>

