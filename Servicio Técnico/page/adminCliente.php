<?php
    $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

    $consulta="SELECT*FROM cliente";
    $resultado=mysqli_query($conexion,$consulta);
    $row=mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../source/Admini.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Administración Clientes</title>
</head>
<div class="container mt-5">
        <div class="row">   
        <div class="col-md-3">
         <h1>Ingresa datos Cliente</h1>
         <form action="insertarCliente.php" method="Post">
         <input class="form-control mb-3" name="IDC" type="text" required="Requerido" placeholder="ID">
         <input class="form-control mb-3" name="NOMBRE" type="text" required="Requerido" placeholder="NOMBRE">
         <input class="form-control mb-3" name="APELLIDO" type="text" required="Requerido" placeholder="APELLIDO">
         <input class="form-control mb-3" name="UBICACION" type="text" required="Requerido" placeholder="UBICACION">
         <input class="form-control mb-3" name="CONTACTO" type="text"required="Requerido"  placeholder="CONTACTO">
         <input class="form-control mb-3" name="CANTIDAD" type="text" required="Requerido" placeholder="CANTIDAD">
         <input class="form-control mb-3" name="MARCA" type="text" required="Requerido" placeholder="MARCA">
         <input class="form-control mb-3" name="OBSERVACION" type="text" required="Requerido" placeholder="OBSERVACION">
         <input class="form-control mb-3" name="TIPO" type="text" required="Requerido" placeholder="TIPO">
         <input class="form-control mb-3" name="ESTADO" type="text" required="Requerido" placeholder="ESTADO">

     <input  class="btn btn-primary"  type="submit" value="Registrar Datos">
     <a href="Administración.php"> <button type="button" class="btn btn-primary"> Ir a Usuarios</button></a>
        </div>
        </form>


        <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Codigo</th> 
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Ubicacion</th>
                        <th>Contacto</th>
                        <th>Cantidad</th>
                        <th>Marca</th>
                        <th>Observacion</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        
                    </tr>
                </thead>

                <tbody>
                
                        <?php
                            while($row=mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                        <th><?php echo $row['IDC']?></th>
                        <th><?php echo $row['NOMBRE']?></th>
                        <th><?php echo $row['APELLIDO']?></th>
                        <th><?php echo $row['UBICACION']?></th>
                        <th><?php echo $row['CONTACTO']?></th>
                        <th><?php echo $row['CANTIDAD']?></th>
                        <th><?php echo $row['MARCA']?></th>
                        <th><?php echo $row['OBSERVACION']?></th>
                        <th><?php echo $row['TIPO']?></th>
                        <th><?php echo $row['ESTADO']?></th>
                        
                        <th><a href="Actualizar_Cliente.php?id=<?php echo $row['IDC']?>"class="btn btn-info">Editar</a></th>
                        <th><a href="BorrarCliente.php?id=<?php echo $row['IDC']?>"class="btn btn-danger">Eliminar</a></th>
                        <th></th>
                        </tr>
                        <?php
                            }
                            ?>

                </tbody>
            </table>
        </div>
    </div>