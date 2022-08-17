<link rel="stylesheet" href="../source/Mensaje.css">
<?php
$USUARIO=$_POST['usuario'];
$CONTRASEÑA=$_POST['contraseña'];


session_start();
$_SESSION['usuario']=$USUARIO;

$conexion=mysqli_connect("localhost","root","","servicio_tecnico");

$consulta="SELECT*FROM usuario where usuario='$USUARIO' and contraseña='$CONTRASEÑA'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas && $filas['CARGO']==1){
    header("location:Administración.php");
}else
if($filas && $filas['CARGO']==2){
 header("location:administracionTecnico.php");
}
else
 {
    ?>
    <?php
    include("iniciar Sesión.php");
    ?>  
    <h1 class="mensaje">!ERROR EN LA AUTENTIFICACIÓN¡</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);