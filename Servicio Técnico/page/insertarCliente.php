<?php
 $conexion=mysqli_connect("localhost","root","","servicio_tecnico");
 
 $IDC=$_POST['IDC'];
 $NOMBRE=$_POST['NOMBRE'];
 $APELLIDO=$_POST['APELLIDO'];
 $UBICACION=$_POST['UBICACION'];
 $CONTACTO=$_POST['CONTACTO'];
 $CANTIDAD=$_POST['CANTIDAD'];
 $MARCA=$_POST['MARCA'];
 $OBSERVACION=$_POST['OBSERVACION'];
 $TIPO=$_POST['TIPO'];
 $ESTADO=$_POST['ESTADO'];


 
 $sql="INSERT INTO cliente value('$IDC','$NOMBRE','$APELLIDO','$UBICACION','$CONTACTO','$CANTIDAD','$MARCA','$OBSERVACION','$TIPO','$ESTADO')";
 $query= mysqli_query($conexion , $sql);

 if($query){    
     header("location:adminCliente.php");
     
 }
 if($IDC==$IDC){
   
    echo "<script> alert('DEBES INGRESAR UN IDENTIFICADOR UNICO PARA CADA CLIENTE ');
    location.href = 'adminCliente.php';
    </script>";
  
 }

 else{

 }
?>
