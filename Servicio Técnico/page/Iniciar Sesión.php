<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../source/Iniciar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
    crossorigin="anonymous">
    <title>Inicio de Sesión</title>
</head>
<body>
        <Section class="login__box">
            <img class="Demur" src="../img/Logo.png" alt="">
            <h1>Iniciar Sesión | DemurStart </h1>
            
            <form action="Validación.php" method="post">
                <label>Usuario</label>
                <input type="text" name="usuario" required="Requerido">
                <label>Contraseña</label>
                <input type="password" name="contraseña" required="Requerido">
                <input type="submit" value="Iniciar">

                <a href="Recuperación.php">Olvide mi contraseña</a>
                <br>
                <a href="Servicio.php">Deseas volver al inicio?</a>
                 <p class="contacto">Contactanos si eres Técnico +56961040606 <i class="fab fa-whatsapp-square"></i></p>
            </form>

        </section>

</body>
</html>