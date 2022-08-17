<?php
        $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

        $IDC=$_POST['IDC'];
        $ESTADO=$_POST['ESTADO'];

       $sql="UPDATE cliente SET ESTADO='$ESTADO' WHERE IDC='$IDC'"; 
       $query=mysqli_query($conexion,$sql);
    
       if($query){
           header("location:administracionTecnico.php");
       }
?>
 