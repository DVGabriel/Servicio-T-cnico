<?php
     $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

     $id=$_GET['id'];
     
     $sql="SELECT*FROM cliente WHERE IDC='$id'";
     $query=mysqli_query($conexion , $sql);
     $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>Actualizar</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">

        <div class="col-md-3">
         <h1>Ingresa los datos</h1>
         
         <form action="ActualizarCliente1.php" method="Post">

         <input class="form-control mb-3" name="IDC" type="text" required="Requerido" placeholder="ID" value=" <?php echo $row['IDC']?>">
         <input class="form-control mb-3" name="NOMBRE" type="text" required="Requerido" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']?>" >
         <input class="form-control mb-3" name="APELLIDO" type="text" required="Requerido" placeholder="APELLIDO" value="<?php echo $row['APELLIDO']?>">
         <input class="form-control mb-3" name="UBICACION" type="text" required="Requerido" placeholder="UBICACION" value="<?php echo $row['UBICACION']?>">
         <input class="form-control mb-3" name="CONTACTO" type="text"required="Requerido"  placeholder="CONTACTO" value="<?php echo $row['CONTACTO']?>">
         <input class="form-control mb-3" name="CANTIDAD" type="text" required="Requerido" placeholder="CANTIDAD" value="<?php echo $row['CANTIDAD']?>">
         <input class="form-control mb-3" name="MARCA" type="text" required="Requerido" placeholder="MARCA" value="<?php echo $row['MARCA']?>">
         <input class="form-control mb-3" name="OBSERVACION" type="text" required="Requerido" placeholder="OBSERVACION" value="<?php echo$row['OBSERVACION']?>">
         <input class="form-control mb-3" name="TIPO" type="text" required="Requerido" placeholder="TIPO" value="<?php echo $row['TIPO']?>">
         <input class="form-control mb-3" name="ESTADO" type="text" required="Requerido" placeholder="ESTADO" value="<?php echo $row['ESTADO']?>">

     <input  class="btn btn-primary btn-block"  type="submit" value="Actualizar">
        </div>
        </form> 
</body>
</html>