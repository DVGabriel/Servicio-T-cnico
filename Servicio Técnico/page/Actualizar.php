<?php
        $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

        $IDUS=$_POST['IDUS'];
        $NOMBRE=$_POST['NOMBRE'];
        $USUARIO=$_POST['USUARIO'];
        $CONTRASEÑA=$_POST['CONTRASEÑA'];
        $CARGO=$_POST['CARGO'];
        $CORREO=$_POST['CORREO'];

       $sql="UPDATE usuario SET NOMBRE='$NOMBRE',USUARIO='$USUARIO',CONTRASEÑA='$CONTRASEÑA',CARGO='$CARGO',CORREO='$CORREO' WHERE IDUS='$IDUS'"; 
       $query=mysqli_query($conexion,$sql);
    
       if($query){
           header("location:Administración.php");
       }
?>