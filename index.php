<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <STYLE>
    body {
      background-image: url(imagenes/Fondo.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .btn_entrar{
        padding: 5px 10px;
        margin-top: 40px;
        border: none;
        font-size: 14px;
        background: #130481;
        color: white;
        cursor: pointer;
        outline: none;
    }

    .btn_atras{
        padding: 5px 10px;
        margin-top: 40px;
        border: none;
        font-size: 14px;
        background: #130481;
        color: white;
        cursor: pointer;
        outline: none;
    }

    .btn_siguiente{
        padding: 5px 10px;
        margin-top: 40px;
        border: none;
        font-size: 14px;
        background: #130481;
        color: white;
        cursor: pointer;
        outline: none;
    }

    .btn_registrarse{
        padding: 5px 10px;
        margin-top: 40px;
        border: none;
        font-size: 14px;
        background: #130481;
        color: white;
        cursor: pointer;
        outline: none;
    }
  </STYLE>
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
                    <p>Regístrate para poder iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
        </div>


            <!--Formulario principal-->
            <div class="contenedor__login-register">

                <!-- Tabla de login -->
                <form action="login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contra" required>
                    <button type="submit" class="btn_entrar">Entrar</button>
                </form>


                <!--Tabla de registro-->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register" enctype="multipart/form-data">
                    <h2>Registrarse</h2>
                    <!--Primera Seccion-->
                    <div class="seccion_seccion-1">
                        <div class="datos_1">
                            <input type="text" placeholder="Nombre" name="nombre" required>
                            <input type="text" placeholder="Primer Apellido" name="primer_apellido" required>
                            <input type="text" placeholder="Segundo Apellido" name="segundo_apellido" required>
                            <input type="number" placeholder="Edad" name="edad" required>
                            <input type="text" placeholder="Correo Electrónico" name="correo" required>
                            <input type="text" placeholder="Teléfono" name="telefono" required>
                            <input type="password" placeholder="Contraseña" name="contra" required>
                        </div>
                    </div>
                    
                    <!--Segunda Seccion-->    
                    <div class="seccion_seccion-2">
                        <div class="datos_2">
                            <h>Comprobante de domiciolio:</h><br>
                            <input type="file" placeholder="Comprobante de domicilio" name="comprobante_domicilio" accept=".pdf" required><br><br>
                            <h>Cartas de recomendacion:</h><br>
                            <input type="file" placeholder="Cartas de recomendacion" name="cartas_recomendacion" accept=".pdf" required><br><br>
                            <h>INE:</h><br>
                            <input type="file" placeholder="INE" name="ine" accept=".pdf" required><br><br>
                            <h>CURP:</h><br>
                            <input type="file" placeholder="CURP" name="curp" accept=".pdf" required><br><br>
                            <h>Licencia:</h><br>
                            <input type="file" placeholder="Licencia" name="licencia" accept=".pdf" required>
                        </div>
                    </div>

                    <div class="boton">
                        <button class="btn_atras">Atras</button>
                    </div>

                    <div class="boton_1">
                        <button class="btn_registrarse">Registrarse</button>
                    </div>

                    <div class="boton_2">
                        <button class="btn_siguiente">Siguiente</button>
                    </div><br><br>
                    <?php
                    $acuerdo = "doc/acuerdo_de_confidencialidad.pdf";
                    ?>
                    <p>Leer antes de subir sus archivos el:</p>
                    <br>
                    <a href="<?php echo $acuerdo; ?>" class="btn_primary" target="_blank">Acuerdo de confidencialidad</a><br>

                </form>

            </div>
        </div>
    </main>
    <script src="scripts/scrip.js"></script>
</body>
</html>
