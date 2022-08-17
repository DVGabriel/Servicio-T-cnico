<?php
        $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

     $id=$_GET['id'];
     
     $sql="SELECT * FROM cliente WHERE IDC='$id'";
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
         <form action="Actualizar_Tecnico_Cli.php   " method="Post">
         <input class="form-control mb-3" name="IDC" type="text" required="Requerido" placeholder="IDC" value="<?php echo $row['IDC']?>">
         <input class="form-control mb-3" name="ESTADO" type="text" required="Requerido" placeholder="ESTADO" value="<?php echo $row['ESTADO']?>">

     <input  class="btn btn-primary btn-block"  type="submit" value="Actualizar">
        </div>
        </form> 
</body>
</html>