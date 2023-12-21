<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">


</head>
<body>

    <form method="POST" action="../php/login_bd.php">
        <img src="../imagenes/imagenes/profile-icon-login-head-icon-vector.jpg" alt="">        
        <label for="username">Usuario</label>
        <input type="text" id="username" placeholder="usuario" name="usuario">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="password" name="password">
        <div class="mostrar">
            <input type="checkbox" id="visible">
            <label for="visible">Mostrar Contraseña</label>
        </div>
        <button type="sumit" id="enviar">Inicias Sesion</button>
    </form>
    <script src="./JS/index.js"></script>
</body>
</html>