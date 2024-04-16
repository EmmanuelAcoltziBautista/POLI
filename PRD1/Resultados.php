<a href="Administrador.php">Regresar</a>
<a href="index.php">Cerrar secion</a>

<center>
<h1>Mensajes recibidos</h1>
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
require_once "Basedatos.php";
$conexion=mysqli_connect(server,user,password,database,port);
$query="SELECT * FROM `REGISTRO`;";
$RESULTADO=mysqli_query($conexion,$query);

while($registro=mysqli_fetch_assoc($RESULTADO)){
    $id=$registro["id"];
echo"<tr><td>".$registro["Nombre"]."</td><td>".$registro["Telefono"]."</td><td>".$registro["Correo"]."</td><td>".$registro["CLAVE_ELECTOR"]."</td><td>".$registro["CURP"]."</td><td>".$registro["SECCION"]."</td><td>"."<a href='Eliminar.php?ID=$id'>Eliminar</a></td><td><a href='Modificar.php?ID=$id'>Editar</a></td>";
}




?>

</body>
