<?php
 $conexion=mysqli_connect("localhost","root","","servicio_tecnico");
 
 $IDUS=$_POST['IDUS'];
 $NOMBRE=$_POST['NOMBRE'];
 $USUARIO=$_POST['USUARIO'];
 $CONTRASEÑA=$_POST['CONTRASEÑA'];
 $CARGO=$_POST['CARGO'];
 $CORREO=$_POST['CORREO'];
 $ESTADO=$_POST['ESTADO'];
 

 $sql="INSERT INTO usuario values('$IDUS','$NOMBRE','$USUARIO','$CONTRASEÑA','$CARGO','$CORREO','$ESTADO')";
 $query= mysqli_query($conexion , $sql);

 if($query){    
     header("location:Administración.php");
     
 }
 if($IDUS==$IDUS){
   
    echo "<script> alert('DEBES INGRESAR UN IDENTIFICADOR UNICO PARA CADA USUARIO');
    location.href = 'Administración.php';
    </script>";
  
 }

 else{

 }
?>