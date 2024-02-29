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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="mod_leyes.css">-->
    <title>Inicio Principal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');

*{
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
    max-width: 1200px;
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
    padding: 150px 150px 0px 0px;
}

.imagen {
    padding: 0px 0px 0px 0px;
    width: 0px;
    height: 0px;
}

.content h1 {
    color: #ffffff;
    font-size: 55px;
    text-transform: uppercase;
    font-weight: 500;
    line-height: 55px;
}

.content p {
    margin-top: 25px;
    color: #aab1ff;
    text-transform: uppercase;
    font-size: 35px;
    line-height: 40px;
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
    padding: 0px 50px;
    display: block;
    justify-content: space-between;
    text-align: center;
}

.service {
    display: block;
    padding: 25px;
    margin: 0px 10px;
    box-shadow: 0px 0px 20px rgba(135, 141, 214, 0.3);
    flex: 1;
    background-color: #ffffff;
    transition: background-color 0.3s ease;
    cursor: pointer;
    border-radius: 5px;
}

.service:hover {
    background-color: #f0f0f0;
}

.service img {
    margin-top: -50px;
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
}

.module {
    flex: 1;
    margin: 5px;
    padding: 5px;
    background-color: #dbe0f2;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.module-section {
    display: block;
    justify-content: space-between;
}

.module:hover {
    background-color: #74e0f8;
}

.module h3 {
    margin-top: 0;
}

.module p {
    margin-bottom: 0;
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
        height: auto;
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
        height: auto;
    }

    .services {
        flex-direction: column;
        padding: 50px 30px 0px 30px;
    }

    .service {
        margin: 0 0 20px;
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
                    <li><a href="http://localhost/integradora/pag_calificaciones.php">Calificaciones</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="content">
                <h1>Selecciona la evaluación que desees realizar</h1>
            </div>
            <img src="imagenes/Rob3.png" alt="">
        </div>
    </header>

    <main class="services container">
    <div class="module-section">
        <div class="service">
            <a href="http://localhost/integradora/evaluacion.php"><h3>-Evaluación sobre conocimientos de situaciones de transito</h3></a>
        </div>
        <div class="service">
            <a href="http://localhost/integradora/evaluacion_se%C3%B1al_vial.php#"><h3>-Evaluación de señales viales</h3></a>
        </div>
    </div>
</main>
    
    <footer>
        
    </footer>
</body>

</html>