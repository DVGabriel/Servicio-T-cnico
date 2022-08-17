<?php

$conexion=mysqli_connect("localhost","root","","servicio_tecnico");

$IDC=$_POST['$IDC'];
$NOMBRE=$_POST['NOMBRE'];
$APELLIDO=$_POST['APELLIDO'];
$UBICACION=$_POST['UBICACION'];
$CONTACTO=$_POST['CONTACTO'];
$MARCA=$_POST['MARCA'];
$TIPO=$_POST['TIPO'];
$CANTIDAD=$_POST['CANTIDAD'];
$OBSERVACION=$_POST['OBSERVACION'];
$ESTADO=$_POST['$ESTADO'];


$sql="INSERT INTO cliente VALUES ('$IDC','$NOMBRE','$APELLIDO','$UBICACION','$CONTACTO','$CANTIDAD','$MARCA','$OBSERVACION','$TIPO','$ESTADO')";
$query=mysqli_query($conexion , $sql);

if($query){
    echo "<script> alert('Solicitud ingresada exitosamente !LOS TECNICOS TE CONTACTARAN DENTRO DE LAS 24HRS¡ Gracias por la preferencia');
    location.href = 'Contacto.php';
    </script>";

}else{
    echo"incorrecto";
}

?>
