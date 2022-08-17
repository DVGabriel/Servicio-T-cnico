<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../source/Recuperacion.css">
    <title>Recuperación de Cuenta</title>
</head>
<body>
        <Section class="login__box">
            <img class="Demur" src="../img/Logo.png" alt="">
            <h1> Recuperación de Cuenta </h1>


            <form  action="" method="POST">

                <label form="username">Email</label>
                <input type="text" name="email" required="requerido">
               
                <input type="submit" value="Recordar Contraseña">

            </form>

            
            <a href="Iniciar Sesión.php">Volver</a>

        </section>

        <?php
        
		try{
			if(isset($_POST['email']) && !empty($_POST['email'])){
                $CONTRASEÑA = substr( md5(microtime()), 1, 10);
                $CORREO = $_POST['email'];
                
                //Conexion con la base
                $conexion=mysqli_connect("localhost","root","","servicio_tecnico");
                // Check connection
                if ($conexion->connect_error) {
                    die("Connection failed: " . $conexion->connect_error);
                } 
                
                $sql = "Update usuario Set CONTRASEÑA='$CONTRASEÑA' Where CORREO='$CORREO'";

                if ($conexion->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $conexion->error;
                }
                
                $to = $_POST['email'];//"destinatario@email.com";
                $from = "From: " . "Tecnology Demurstart" ;
                $subject = "Recordar contraseña";
                $message = "El sistema le asigno la siguiente clave " . $CONTRASEÑA;

                mail($to, $subject, $message, $from);
                echo 'Correo enviado satisfactoriamente a ' . $_POST['email'];
            }
            else 
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
            
        ?>

</body>
</html>