<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../source/Contacto.css">
    <title>Contacto</title>
</head>
<body>
    <header>
        <Section class="login__box">
            <img class="Demur" src="../img/Logo.png" alt="">
            <h1>Contacto | DemurStart </h1>

            <form action="insertarDatos.php" method="post">

            
                <input name="IDC" type="hidden"  required="Requerido">

                <label form="username">Nombre</label>
                <input name="NOMBRE" type="text"  required="Requerido">

                <label for="password">Apellido</label>
                <input  name="APELLIDO" type="text"  required="Requerido"> 

                <label for="password">ubicación</label>
                <input name="UBICACION" type="text" required="Requerido">  

                <label for="password">Contacto</label>
                <input name="CONTACTO" type="text"  required="Requerido">

                <label for="password">Marca de computador</label>
                <input name="MARCA" type="text"  required="Requerido">

                <label for="password">Tipo de computador</label>
                <input  name="TIPO"  type="text" required="Requerido">

                <label for="password">Cantidad de computadores</label>
                <input  name="CANTIDAD" type="text"  required="Requerido">

                <label for="password">Observación</label>
                <input   name="OBSERVACION" type="text" required="Requerido">

               
                <input name="ESTADO" type="hidden"  required="Requerido">

            

                <input type="submit" value="Enviar Solicitud">
                <a href="Servicio.php">Deseas Volver al Inicio?</a>

            </form>

        </section>

    </header>
</body>
</html>