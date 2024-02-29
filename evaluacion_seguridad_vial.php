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
<html>
<head>
    <title>Evaluación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');

body {
background-image: url(imagenes/Fondo.png);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
justify-content: center;
min-height: 100hv;  
font-family: Arial, sans-serif;
line-height: 1.6;
background-color: #0056b3;
background-position: center;
color: #000000;
max-width: 800px;
margin: 0 auto;
padding: 20px;
}

*{
margin: 0;
padding: 0;
box-sizing: border-box;
text-transform: capitalize;
text-decoration: none;
list-style:none;
font-family: 'Poppins', sans-serif;
}


.titulo {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
}

.recuadro {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

input[type="radio"], input[type="checkbox"] {
    margin-right: 10px;
}

label {
    display: block;
    margin-bottom: 10px;
}

.btn-custom {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
}

.btn-custom:hover {
    background-color: #0056b3;
}

header {
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

.container1 {
max-width: 1200px;
margin: 10px 0px;
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


.titulo {
text-align: center;
margin-bottom: 20px;
color: rgb(0, 0, 0);
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
                    <li><a href="http://localhost/integradora/evaluacion.php">Evaluaciones</a></li>
                    <li><a href="http://localhost/integradora/pag_calificaciones.php">Calificaciones</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <div class="container1">
        <div class="titulo">
            <h1>Evaluacion sobre seguridad vial</h1>
        </div><br><br>      
        <form id="examenForm" class="mt-4" action="guardar_evaluacion1.php" method="POST">
            <!-- Pregunta 1 -->
            <div class="recuadro p-3 mb-3 border"> 
                <label for="pregunta_1">1. ¿Qué entendemos por seguridad vial?</label><br><br>
                <input type="radio" id="opcion_1" name="respuesta1" value="La prevención de accidentes de tránsito" required>
                <label for="opcion_1">La prevención de accidentes de tránsito.</label><br>
                <input type="radio" id="opcion_2" name="respuesta1" value="La promoción de carreras de automovilismo seguras." required>
                <label for="opcion_2">La promoción de carreras de automovilismo seguras.</label><br>
                <input type="radio" id="opcion_3" name="respuesta1" value="La minimización de la velocidad en carreteras." required>
                <label for="opcion_3">La minimización de la velocidad en carreteras.</label><br>
                <input type="radio" id="opcion_4" name="respuesta1" value="La promoción de la conducción temeraria." required>
                <label for="opcion_4">La promoción de la conducción temeraria.</label><br><br>
            </div>

            <!-- Pregunta 2 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_2">2. ¿Qué es la seguridad vial sinónimo de?</label><br><br>
                <input type="radio" id="opcion_5" name="respuesta2" value="Evitar los semáforos en rojo." required>
                <label for="opcion_5">Evitar los semáforos en rojo.</label><br>
                <input type="radio" id="opcion_6" name="respuesta2" value="Prevenir accidentes de tráfico." required>
                <label for="opcion_6">Prevenir accidentes de tráfico.</label><br>
                <input type="radio" id="opcion_7" name="respuesta2" value="Ignorar las señales de tránsito." required>
                <label for="opcion_7">Ignorar las señales de tránsito.</label><br>
                <input type="radio" id="opcion_8" name="respuesta2" value="Conducir a alta velocidad." required>
                <label for="opcion_8">Conducir a alta velocidad.</label><br><br>
            </div>

            <!-- Pregunta 3 -->
            <div class="recuadro p-3 mb-3 border"> 
                <label for="pregunta_3">3. ¿Qué factores forman el tándem principal de la seguridad vial?</label><br><br>
                <input type="radio" id="opcion_9" name="respuesta3" value="Responsabilidad de los usuarios de la vía y velocidad alta." required>
                <label for="opcion_9">Responsabilidad de los usuarios de la vía y velocidad alta.</label><br>
                <input type="radio" id="opcion_10" name="respuesta3" value="Normas reguladoras de tránsito y educación vial." required>
                <label for="opcion_10">Normas reguladoras de tránsito y educación vial.</label><br>
                <input type="radio" id="opcion_11" name="respuesta3" value="Promoción de carreras de automovilismo y protección de peatones." required>
                <label for="opcion_11">Promoción de carreras de automovilismo y protección de peatones.</label><br>
                <input type="radio" id="opcion_12" name="respuesta3" value="Velocidad alta y falta de atención." required>
                <label for="opcion_12">Velocidad alta y falta de atención.</label><br><br>
            </div>

            <!-- Pregunta 4 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_4">4. ¿Qué tipo de seguridad vial busca reducir las consecuencias de un accidente en el momento en que ocurre?</label><br><br>
                <input type="radio" id="opcion_13" name="respuesta4" value="Seguridad activa." required>
                <label for="opcion_13">Seguridad activa.</label><br>
                <input type="radio" id="opcion_14" name="respuesta4" value="Seguridad pasiva." required>
                <label for="opcion_14">Seguridad pasiva.</label><br>
                <input type="radio" id="opcion_15" name="respuesta4" value="Seguridad terciaria." required>
                <label for="opcion_15">Seguridad terciaria.</label><br>
                <input type="radio" id="opcion_16" name="respuesta4" value="Seguridad preventiva." required>
                <label for="opcion_16">Seguridad preventiva.</label><br><br>
            </div>

            <!-- Pregunta 5 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_5">5. ¿Cuál es un ejemplo de elemento de seguridad activa?</label><br><br>
                <input type="radio" id="opcion_17" name="respuesta5" value="Airbag." required>
                <label for="opcion_17">Airbag.</label><br>
                <input type="radio" id="opcion_18" name="respuesta5" value="Cinturón de seguridad." required>
                <label for="opcion_18">Cinturón de seguridad.</label><br>
                <input type="radio" id="opcion_19" name="respuesta5" value="Luces de freno." required>
                <label for="opcion_19">Luces de freno.</label><br>
                <input type="radio" id="opcion_20" name="respuesta5" value="Extintor de incendios." required>
                <label for="opcion_20">Extintor de incendios.</label><br><br>
            </div>

            <!-- Pregunta 6 -->
            <div class="recuadro p-3 mb-3 border"> 
                <label for="pregunta_6">6. ¿Cuál es un ejemplo de elemento de seguridad pasiva?</label><br><br>
                <input type="radio" id="opcion_21" name="respuesta6" value="Luces de freno." required>
                <label for="opcion_21">Luces de freno.</label><br>
                <input type="radio" id="opcion_22" name="respuesta6" value="Airbag." required>
                <label for="opcion_22">Airbag.</label><br>
                <input type="radio" id="opcion_23" name="respuesta6" value="Corte del combustible." required>
                <label for="opcion_23">Corte del combustible.</label><br>
                <input type="radio" id="opcion_24" name="respuesta6" value="Curso de educación vial." required>
                <label for="opcion_24">Curso de educación vial.</label><br><br>
            </div>

            <!-- Pregunta 7 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_7">7. ¿Cuál es un ejemplo de elemento de seguridad terciaria?</label><br><br>
                <input type="radio" id="opcion_25" name="respuesta7" value="Curso de educación vial." required>
                <label for="opcion_25">Curso de educación vial.</label><br>
                <input type="radio" id="opcion_26" name="respuesta7" value="Cinturón de seguridad." required>
                <label for="opcion_26">Cinturón de seguridad.</label><br>
                <input type="radio" id="opcion_27" name="respuesta7" value="Corte del combustible." required>
                <label for="opcion_27">Corte del combustible.</label><br>
                <input type="radio" id="opcion_28" name="respuesta7" value="Luces de freno." required>
                <label for="opcion_28">Luces de freno.</label><br><br>
            </div>

            <!-- Pregunta 8 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_8">8. ¿Cuál es la importancia de las instituciones públicas y asociaciones en la seguridad vial?</label><br><br>
                <input type="radio" id="opcion_29" name="respuesta8" value="Reducir el flujo de tráfico en las carreteras." required>
                <label for="opcion_29">Reducir el flujo de tráfico en las carreteras.</label><br>
                <input type="radio" id="opcion_30" name="respuesta8" value="Promover carreras de automovilismo seguras." required>
                <label for="opcion_30">Promover carreras de automovilismo seguras.</label><br>
                <input type="radio" id="opcion_31" name="respuesta8" value="Realizar inspecciones técnicas a los vehículos." required>
                <label for="opcion_31">Realizar inspecciones técnicas a los vehículos.</label><br>
                <input type="radio" id="opcion_32" name="respuesta8" value="Promover campañas y cursos sobre seguridad y educación vial." required>
                <label for="opcion_32">Promover campañas y cursos sobre seguridad y educación vial.</label><br><br>
            </div>

            <!-- Pregunta 9 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_9">9. ¿Qué busca la seguridad vial en relación con las personas con discapacidad?</label><br><br>
                <input type="radio" id="opcion_33" name="respuesta9" value="Reducir su presencia en las carreteras." required>
                <label for="opcion_33">Reducir su presencia en las carreteras.</label><br>
                <input type="radio" id="opcion_34" name="respuesta9" value="Garantizar su acceso a servicios de transporte." required>
                <label for="opcion_34">Garantizar su acceso a servicios de transporte.</label><br>
                <input type="radio" id="opcion_35" name="respuesta9" value="Prohibir su circulación en vías públicas." required>
                <label for="opcion_35">Prohibir su circulación en vías públicas.</label><br>
                <input type="radio" id="opcion_36" name="respuesta9" value="Reducir el límite de velocidad en áreas donde hay personas con discapacidad." required>
                <label for="opcion_36">Reducir el límite de velocidad en áreas donde hay personas con discapacidad.</label><br><br>
            </div>

            <!-- Pregunta 10 -->
            <div class="recuadro p-3 mb-3 border">
                <label for="pregunta_10">10. ¿Qué tipo de seguridad vial se refiere a la prevención de accidentes de tráfico?</label><br><br>
                <input type="radio" id="opcion_37" name="respuesta10" value="Seguridad activa." required>
                <label for="opcion_37">Seguridad activa.</label><br>
                <input type="radio" id="opcion_38" name="respuesta10" value="Seguridad pasiva." required>
                <label for="opcion_38">Seguridad pasiva.</label><br>
                <input type="radio" id="opcion_39" name="respuesta10" value="Seguridad terciaria." required>
                <label for="opcion_39">Seguridad terciaria.</label><br>
                <input type="radio" id="opcion_40" name="respuesta10" value="Seguridad preventiva." required>
                <label for="opcion_40">Seguridad preventiva.</label><br><br>
            </div>

            <input type="hidden" name="id_candidato" value="<?php echo $correo_usuario; ?>">

            <div class="text-center">
                <input type="submit" value="Enviar respuestas">
            <div>
        </form>
    </div>
</body>
</html>






