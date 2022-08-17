<?php
    $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

    $IDC=$_GET['id'];

    $sql="DELETE FROM cliente WHERE IDC='$IDC'";
    $query=mysqli_query($conexion , $sql);

    if($query){
            header('location:adminCliente.php');
    }else{

    }
        
?>