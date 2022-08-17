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

       $sql="UPDATE cliente SET NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',UBICACION='$UBICACION',CONTACTO='$CONTACTO',CANTIDAD='$CANTIDAD',MARCA='$MARCA',OBSERVACION='$OBSERVACION',TIPO='$TIPO',ESTADO='$ESTADO' WHERE IDC='$IDC'"; 
       $query=mysqli_query($conexion,$sql);
    
       if($query){
           header("location:adminCliente.php");
       }
?>
 
                       