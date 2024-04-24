<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <link rel="stylesheet" href="estilosCss/fondo.css">
    <link rel="stylesheet" href="estilosCss/estilos.css">

<script src="Cerrar.js">

</script>

</head>
<body>
<div class="gradiente">
</div>
<div class="contenedor">
<center>


<!--a onClick="Close()">hj</a-->

<h1>Login</h1>
<img src="images/usuario.png">
    <form method="post">
    <label for="Usuario"><b>N. Usuario</b></label>
    <input type="number" id="Usuario" name="Usuario" placeholder="Usuario:" required>
<br/>
  
  <label for="Contrasena"><b>Contraseña</b></label>
    <input type="password" id="Contrasena" name="Contrasena" placeholder="Contraseña:" required>
<br/>
 <header class="Botones1">
   <input type="submit" class="arriba_boton1" id="Enviar" name="Enviar" value="Ingresar">
</header>    
</form >
    <?php
    //En esta seccion pregunto si toco el botone
    
    if(ISSET($_POST["Enviar"])){

    require_once "Database/Basedatos.php";
    $conexionbd=mysqli_connect(server,user,password,database,port);
    $Usuario=$_POST["Usuario"];
    $Contrasena=$_POST["Contrasena"];

    $query="SELECT * FROM `USUARIOS` WHERE ID=".$Usuario." AND CONTRASENA='".$Contrasena."';";
    $ConsultaUsuarios=mysqli_query($conexionbd,$query);
        if($res=mysqli_fetch_assoc($ConsultaUsuarios)){
            $query2="SELECT `SECTOR` FROM `USUARIOS` WHERE ID=$Usuario";
            $ConsultaSector=mysqli_query($conexionbd,$query2);
		$r=mysqli_fetch_assoc($ConsultaSector);
		if($r["SECTOR"]=="Administrador"){
		echo"<script>document.location.href='Admin/index.php';</script>";
		}
		if($r["SECTOR"]=="Normal"){
		echo"<script>document.location.href='Encuestador/index.php';</script>";

	}        }else{
            echo"<script>alert('El sol no salio para ti');document.location.href='index.php';</script>";

        }

    }
    ?>
<!--footer>
 
</footer-->
</div>

</body>
</html>
