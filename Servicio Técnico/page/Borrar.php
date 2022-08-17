<?php
    $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

    $IDUS=$_GET['id'];

    $sql="UPDATE usuario SET ESTADO= 0 WHERE IDUS='$IDUS'";
    $query=mysqli_query($conexion , $sql);
    
    if($query){
        
            header('location:Administración.php');
    }else{

    }
        
?>