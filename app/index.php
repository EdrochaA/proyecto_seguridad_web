<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" id="usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" id="contrasena" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="reg.php" class="formulario__register" onsubmit=" return comprobarReg()" method="POST">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" id="nombre" name="nombre">
                    <input type="text" placeholder="DNI" id="dni" name="dni">
                    <input type="text" placeholder="Teléfono" id="telefono" name="telefono">
                    <input type="text" placeholder="Fecha de Nacimiento" id="fechancto" name="fechancto">
                    <input type="text" placeholder="Correo Electrónico" id="email" name="email">
                    <input type="text" placeholder="Usuario" id="user" name="user">
                    <input type="password" placeholder="Contraseña" id="contra" name="contra">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>

    </main>
    <script src="./js/script.js"></script>
    <script type="text/javascript" src="js/comprobarReg.js"></script>
</body>
</html>