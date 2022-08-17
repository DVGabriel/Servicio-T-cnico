<?php
    $conexion=mysqli_connect("localhost","root","","servicio_tecnico");

    $consulta="SELECT*FROM usuario WHERE ESTADO<>0";
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
    <title>Administración Usuarios</title>
</head>
<body>
<a href="iniciar Sesión.php"> <button type="button" class="btn btn-primary"> Cerrar Sesión</button></a>

    <div class="container mt-5">
        <div class="row">   
        <div class="col-md-3">
         <h1>Ingresa datos Usuario</h1>

         <form action="insertar.php" method="Post">
         <input class="form-control mb-3" name="IDUS" type="text"  required="Requerido" placeholder="ID">
         <input class="form-control mb-3" name="NOMBRE" type="text" required="Requerido" placeholder="NOMBRE">
         <input class="form-control mb-3" name="USUARIO" type="text" required="Requerido" placeholder="USUARIO">
         <input class="form-control mb-3" name="CONTRASEÑA" type="text" required="Requerido" placeholder="CONTRASEÑA">
         <input class="form-control mb-3" name="CARGO" type="text"required="Requerido"  placeholder="CARGO">
         <input class="form-control mb-3" name="CORREO" type="text" required="Requerido" placeholder="CORREO">
         <input class="form-control mb-3" name="ESTADO" type="text" required="Requerido" placeholder="ESTADO">

     <input  class="btn btn-primary"  type="submit" value="Registrar Datos">
     <a href="adminCliente.php"> <button type="button" class="btn btn-primary"> Ir a Clientes</button></a>
    
        </div>
        </form>

        <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Codigo</th> 
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Cargo</th>
                        <th>Correo</th>
                        <th>Estado</th>
                      
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            while($row=mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                        <th><?php echo $row['IDUS']?></th>
                        <th><?php echo $row['NOMBRE']?></th>
                        <th><?php echo $row['USUARIO']?></th>
                        <th><?php echo $row['CONTRASEÑA']?></th>
                        <th><?php echo $row['CARGO']?></th>
                        <th><?php echo $row['CORREO']?></th>
                        <th><?php echo $row['ESTADO']?></th>
                        
                        <th><a href="Actu.php?id=<?php echo $row['IDUS']?>"class="btn btn-info">Editar</a></th>
                        <th><a href="Borrar.php?id=<?php echo $row['IDUS']?>"class="btn btn-danger">Eliminar</a></th>
                        
                        <th></th>
                        </tr>
                        <?php
                            }
                            ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>