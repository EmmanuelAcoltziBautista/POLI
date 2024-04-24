<script src="../js/Cerrar.js"></script>

<link rel="stylesheet" href="../estilosCss/fondo.css">
<link rel="stylesheet" href="../estilosCss/estilos.css">

<div class="gradiente">
<a href="index.php" class="arriba_boton">Regresar</a>
<a Onclick="Close()" class="arriba_boton">Cerrar secion</a>



<center>
<h1>Resultado encuesta</h1>
</center>



<center>





<br/>
<ul>
<table border="1" class="c">
<tr>
<th>Nombre</th>
<th>Telefono</th>
<th>Correo</th>
<th>Clave_elector</th>
<th>Zona</th>
<th>Seccion</th>
<th>Eliminar</th>
<th>Modificar</th>

</tr>

<?php
error_reporting(0);
require_once "../Database/Basedatos.php";


$Zona1=$_POST["Zona"];
$Seccion1=$_POST["Seccion"];
    $conexion=mysqli_connect(server,user,password,database,port);
$query="SELECT * FROM `REGISTRO`;";
$RESULTADO=mysqli_query($conexion,$query);

while($registro=mysqli_fetch_assoc($RESULTADO)){
    $id=$registro["id"];
echo"<tr><td>".$registro["Nombre"]."</td><td>".$registro["Telefono"]."</td><td>".$registro["Correo"]."</td><td>".$registro["CLAVE_ELECTOR"]."</td><td>".$registro["CURP"]."</td><td>".$registro["SECCION"]."</td><td>"."<a href='Eliminar.php?ID=$id' class='arriba_boton2'>Eliminar</a></td><td><a class='arriba_boton2' href='Modificar.php?ID=$id'>Editar</a></td>";
}




?>

</body>
</div>