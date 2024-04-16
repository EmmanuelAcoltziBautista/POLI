<script src="../js/Cerrar.js"></script>

<a href="index.php">Regresar</a>
<a Onclick="Close()">Cerrar secion</a>



<center>
<h1>Mensajes recibidos</h1>
</center>



<center>



<form method="post">
<?php 

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
<select id="Seccion" name="Seccion">
<?php
while ($fila = mysqli_fetch_assoc($SALIDA1)){
$Seccion=$fila["SECCION"];
//$Zona=$fila["CURP"];
?>

<option value="<?php echo $Seccion;?>"><?php echo $Seccion;?></option>
<?php
}
?>
</select>

<!--Zona-->


<label for="Zona">Zona:</label>
<select id="Zona" name="Zona">
<?php
while ($fila1 = mysqli_fetch_assoc($SALIDA2)){
//$Seccion=$fila1[""];
$Zona=$fila1["CURP"];
?>

<option value="<?php echo $Zona;?>"><?php echo $Zona;?></option>
<?php
}
?>

</select>


<input type="submit" id="Enviar" name="Enviar">

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
echo"<tr><td>".$registro["Nombre"]."</td><td>".$registro["Telefono"]."</td><td>".$registro["Correo"]."</td><td>".$registro["CLAVE_ELECTOR"]."</td><td>".$registro["CURP"]."</td><td>".$registro["SECCION"]."</td><td>"."<a href='Eliminar.php?ID=$id'>Eliminar</a></td><td><a href='Modificar.php?ID=$id'>Editar</a></td>";
}



}
?>

</body>
