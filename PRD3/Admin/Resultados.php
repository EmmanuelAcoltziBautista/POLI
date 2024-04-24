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



<form method="post">
<?php 
error_reporting(0);
require_once "../Database/Basedatos.php";
$conexioncon=mysqli_connect(server,user,password,database,port);
$conexioncon1=mysqli_connect(server,user,password,database,port);

$qresultados="SELECT * FROM `REGISTRO`;";
$qresultados1="SELECT * FROM `REGISTRO`;";

$SALIDA1=mysqli_query($conexioncon,$qresultados);
$SALIDA2=mysqli_query($conexioncon1,$qresultados1);

?>


<!--Seccion-->
<label for="Seccion">Seccion</label>
<select id="Seccion" name="Seccion" class="SELE">
<?php
for($i=127;$i<=157;$i++){


?>    
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>

</select>

<!--Zona-->


<label for="Zona">Zona:</label>
<select id="Zona" name="Zona" class="SELE">
<?php
for($i=1;$i<=8;$i++){


?>    
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select>


<input type="submit" id="Enviar" value="Buscar" class="arriba_boton1" name="Enviar">

</form>






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

if($_POST["Enviar"]){
$Zona1=$_POST["Zona"];
$Seccion1=$_POST["Seccion"];
    $conexion=mysqli_connect(server,user,password,database,port);
$query="SELECT * FROM `REGISTRO` WHERE SECCION='".$Seccion1."' AND CURP='".$Zona1."';";
$RESULTADO=mysqli_query($conexion,$query);

while($registro=mysqli_fetch_assoc($RESULTADO)){
    $id=$registro["id"];
echo"<tr><td>".$registro["Nombre"]."</td><td>".$registro["Telefono"]."</td><td>".$registro["Correo"]."</td><td>".$registro["CLAVE_ELECTOR"]."</td><td>".$registro["CURP"]."</td><td>".$registro["SECCION"]."</td><td>"."<a class='arriba_boton2' href='Eliminar.php?ID=$id'>Eliminar</a></td><td><a class='arriba_boton2' href='Modificar.php?ID=$id'>Editar</a></td>";
}



}
?>

</body>
</div>