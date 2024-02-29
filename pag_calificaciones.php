<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
    list-style:none;
    font-family: 'Poppins', sans-serif;
    }

    body {
    background-color: #f5f5f5;
    }

    header {
    background-image: url(imagenes/hero.svg);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 70vh;
    display: flex;
    align-items: center;
    }

    .container {
    max-width: 1100px;
    margin: 0 auto;
    }

    .menu {
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    }

    .menu .logo {
    font-weight: 700;
    font-size: 25px;
    color: #ffffff;
    }

    .menu .navbar ul li {
    position: relative;
    float: left;
    }

    .menu .navbar ul li a {
    font-size: 18px;
    padding: 20px;
    color: #ffffff;
    display: block;
    }

    .menu .navbar ul li a:hover {
    color: #0eaef3;
    }

    #menu {
    display: none;
    }

    .menu-icono {
    width: 25px;
    }

    .menu label {
    cursor: pointer;
    display: none;
    }

    .header-content {
    display: flex;
    }

    .content {
    padding: 10px 30px 0px 30px;
    text-align: center; /* Añadido */
    }

    .content h1 {
    color: #ffffff;
    font-size: 35px; /* Ajustado */
    text-transform: uppercase;
    font-weight: 500;
    line-height: 40px; /* Ajustado */
    }

    .content p {
    margin-top: 25px;
    color: #aab1ff;
    text-transform: uppercase;
    font-size: 25px; /* Ajustado */
    line-height: 30px; /* Ajustado */
    }

    .btn-1 {
    display: inline-block;
    background-color: rgba(170, 177, 255, 0.3);
    border: 1px solid #aab1ff;
    margin: 35px 10px 0px 0px;
    padding: 15px 25px;
    color: #ffffff;
    border-radius: 25px;
    }

    .btn-1:hover {
    background-color: #aab1ff;
    }

    .services {
    padding: 10px 0px;
    display: flex;
    flex-wrap: wrap; /* Añadido */
    justify-content: center; /* Ajustado */
    text-align: center;
    }

    .service {
    padding: 25px;
    margin: 0px 10px;
    box-shadow: 0px 0px 20px rgba(135, 141, 214, 0.3);
    flex-basis: 45%; /* Ajustado */
    margin-bottom: 30px; /* Ajustado */
    }

    .service img {
    margin-top: -50px;
    width: 100%; /* Ajustado */
    }

    .service h3 {
    font-size: 20px;
    color: #0e0e0e;
    margin-bottom: 10px;
    }

    .service p {
    color: #525254;
    font-size: 16px;
    }

    .btn-2 {
    display: inline-block;
    padding: 15px 25px;
    border-radius: 25px;
    background-color: #7042b5;
    color: #ffffff;
    }

    .btn-2:hover {
    background-color: #8650d7;
    }

    footer {
    padding: 200px 0px 30px 0px;
    background-image: url(imagenes/footer.svg);
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center; /* Añadido */
    }

    @media (max-width: 991px) {
    .menu {
        padding: 20px;
    }

    .menu label {
        display: initial;
    }

    .menu .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: #5850Bc;
        display: none;
    }

    .menu .navbar ul li {
        width: 100%;
    }

    #menu:checked ~ .navbar {
        display: initial;
    }

    header {
        height: 0vh;
        padding: 40px 0px;
        background-position: center center;
    }

    .header-content {
        flex-direction: column;
        text-align: center;
        align-items: center;
        padding: 0px 30px;
    }

    .content {
        padding: 0px;
    }

    .content h1 {
        margin-top: 100px;
        font-size: 45px;
    }

    .content p {
        margin-top: 0px;
    }

    .header-content img {
        width: 150px;
    }

    .services {
        flex-direction: column;
        padding: 50px 30px 0px 30px;
    }

    .service {
        margin-bottom: 50px;
    }

    .footer {
        padding: 0px 30px 30px 30px;
    }

    .info-content {
        flex-direction: column;
        text-align: center;
    }

    .info-price {
        margin: 0px 0px 20px 0px;
    }

    .info-txt {
        margin: 0px;
    }

    hr {
        margin: 25px 0px;
    }

    .enlaces {
        flex-direction: column;
        align-items: center;
    }

    .enlace {
        flex-direction: column;
    }
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        }

        /* Estilo para las celdas encabezado */
        .table th {
        background-color: #f2f2f2;
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
        }

        /* Estilo para las celdas de datos */
        .table td {
        padding: 8px;
        border: 1px solid #ddd;
        }

        /* Estilo para las filas impares */
        .table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
        }

        /* Estilo para filas al pasar el cursor */
        .table tbody tr:hover {
        background-color: #e6e6e6;
        }

        /* Estilo para la cabecera del título */
        h2 {
        font-size: 24px;
        margin-bottom: 10px;
        }

    </style>
</head>
<body>

    <header>
        <div class="menu container">
            <a href="#" class="logo"><h1>Micro-Info</h1></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="imagenes/menu-btn.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="http://localhost/integradora/pag-principal.php#">Inicio</a></li>
                    <li><a href="http://localhost/integradora/mod_leyes.php#">Modulos</a></li>
                    <li><a href="http://localhost/integradora/evaluaciones.php">Evaluaciones</a></li>
                    <li><a href="http://localhost/integradora/pag_calificaciones.php#">Calificaciones</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="content">
                <h1>Ve el resultado de tu esfuerzo</h1>
            </div>
        </div>    
    </header>

<h2>Calificaciones de las evaluaciones realizadas:</h2><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID Candidato</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Nombre Evaluación</th>
            <th>Calificación</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'conexion_be.php';

        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['usuario'])) {
            $id_candidato_activo = $_SESSION['usuario']; // Ajusta la clave de la sesión según tu implementación

            $consulta_calificaciones = "
                SELECT c.ID_candidato, c.nombre, c.primer_apellido, c.segundo_apellido, cal.nombre_evaluacion, cal.calificacion
                FROM candidatos c
                JOIN calificaciones cal ON c.ID_candidato = cal.ID_candidato
                WHERE c.correo = ?
            ";
            $stmt_calificaciones = $conexion->prepare($consulta_calificaciones);
            $stmt_calificaciones->bind_param("s", $id_candidato_activo);
            $stmt_calificaciones->execute();
            $resultado_calificaciones = $stmt_calificaciones->get_result();

            while ($fila = $resultado_calificaciones->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $fila['ID_candidato']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['primer_apellido']; ?></td>
                <td><?php echo $fila['segundo_apellido']; ?></td>
                <td><?php echo $fila['nombre_evaluacion']; ?></td>
                <td><?php echo $fila['calificacion']; ?></td>
            </tr>
            <?php endwhile;
            
            $stmt_calificaciones->close();
        }
        ?>
    </tbody>
</table>
    <footer>
        
    </footer>
</body>
</html>
