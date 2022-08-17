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
    <title>Administración Tecnico</title>
</head>

<a href="Iniciar Sesión.php"> <button type="button" class="btn btn-primary">Cerrar Sesión</button></a>
<div class="container mt-5">
        <div class="row">   

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
                        
                        <th><a href="Actualizar_Clien_Tecnico.php?id=<?php echo $row['IDC']?>"class="btn btn-info">Editar</a></th>
                                
                        <th></th>
                        </tr>
                        <?php
                            }
                            ?>
                    
                </tbody>
            </table>
      
        </div>
    </div>