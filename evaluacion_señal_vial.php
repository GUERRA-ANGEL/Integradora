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
                    <li><a href="http://localhost/integradora/pag-principal.php#">Início</a></li>
                    <li><a href="http://localhost/integradora/mod_leyes.php#">Modúlos</a></li>
                    <li><a href="http://localhost/integradora/evaluaciones.php">Evaluaciones</a></li>
                    <li><a href="http://localhost/integradora/pag_calificaciones.php">Calificaciones</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <div class="container1">
        <div class="titulo">
            <h1>Evaluación de señales viales</h1>
        </div>      
        <form id="examenForm" class="mt-4" action="guardar_evaluacion1.php" method="POST">
        <!-- Pregunta 1 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_1">1.-¿Cuál es la función principal de las señales horizontales o marcas viales?</label><br><br>
            <input type="radio" id="opcion_1" name="respuesta1" value="Decorar las calles" required>
            <label for="opcion_1">Decorar las calles</label><br>
            <input type="radio" id="opcion_2" name="respuesta1" value="Regular la circulación vial" required>
            <label for="opcion_2">Regular la circulación vial</label><br>
            <input type="radio" id="opcion_3" name="respuesta1" value="Proporcionar música en las carreteras" required>
            <label for="opcion_3">Proporcionar música en las carreteras</label><br>
            <input type="radio" id="opcion_4" name="respuesta1" value="Servir como bancos para peatones" required>
            <label for="opcion_4">Servir como bancos para peatones</label><br><br>
        </div>
        <!-- Pregunta 2 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_2">2.-¿Cuál es la función principal de las señales horizontales o marcas viales?</label><br><br>
            <input type="radio" id="opcion_5" name="respuesta2" value="Decorar las calles." required>
            <label for="opcion_5">Decorar las calles</label><br>
            <input type="radio" id="opcion_6" name="respuesta2" value="Regular la circulación vial" required>
            <label for="opcion_6">Regular la circulación vial</label><br>
            <input type="radio" id="opcion_7" name="respuesta2" value="Proporcionar música en las carreteras" required>
            <label for="opcion_7">Proporcionar música en las carreteras</label><br>
            <input type="radio" id="opcion_8" name="respuesta2" value="Servir como bancos para peatones" required>
            <label for="opcion_8">Servir como bancos para peatones</label><br><br>
        </div>
         <!-- Pregunta 3 -->
         <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_3">3.-¿Cuál es el propósito de las señales horizontales en el tránsito?</label><br><br>
            <input type="radio" id="opcion_9" name="respuesta3" value="Decorar el paisaje urbano" required>
            <label for="opcion_9">Decorar el paisaje urbano</label><br>
            <input type="radio" id="opcion_10" name="respuesta3" value="Orientar a los conductores y peatones" required>
            <label for="opcion_10">Orientar a los conductores y peatones</label><br>
            <input type="radio" id="opcion_11" name="respuesta3" value="Brindar entretenimiento en la carretera" required>
            <label for="opcion_11">Brindar entretenimiento en la carretera</label><br>
            <input type="radio" id="opcion_12" name="respuesta3" value="Indicar la hora del día" required>
            <label for="opcion_12">Indicar la hora del día</label><br><br>
        </div>
        <!-- Pregunta 4 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_4">4.-¿Qué color se utiliza en las señales horizontales para calles de doble sentido?</label><br><br>
            <input type="radio" id="opcion_13" name="respuesta4" value="Amarillo" required>
            <label for="opcion_13">Amarillo</label><br>
            <input type="radio" id="opcion_14" name="respuesta4" value="Rojo" required>
            <label for="opcion_14">Rojo</label><br>
            <input type="radio" id="opcion_15" name="respuesta4" value="Verde" required>
            <label for="opcion_15">Verde</label><br>
            <input type="radio" id="opcion_16" name="respuesta4" value="Blanco" required>
            <label for="opcion_16">Blanco</label><br><br>
        </div>
         <!-- Pregunta 5 -->
         <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_5">5.-¿Qué tipo de marcas se utilizan para señalar el lugar donde los vehículos deben parar en una intersección?</label><br><br>
            <input type="radio" id="opcion_17" name="respuesta5" value="Líneas longitudinales" required>
            <label for="opcion_17">Líneas longitudinales</label><br>
            <input type="radio" id="opcion_18" name="respuesta5" value="Flechas direccionales" required>
            <label for="opcion_18">Flechas direccionales</label><br>
            <input type="radio" id="opcion_19" name="respuesta5" value="Líneas transversales" required>
            <label for="opcion_19">Líneas transversales</label><br>
            <input type="radio" id="opcion_20" name="respuesta5" value="Puntos amarillos" required>
            <label for="opcion_20">Puntos amarillos</label><br><br>
        </div>
        <!-- Pregunta 6 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_6">6.-¿Para qué se usan las líneas longitudinales en las calzadas?</label><br><br>
            <input type="radio" id="opcion_21" name="respuesta6" value="Para marcar zonas de estacionamiento" required>
            <label for="opcion_21">Para marcar zonas de estacionamiento</label><br>
            <input type="radio" id="opcion_22" name="respuesta6" value="Para señalar áreas para bicicletas" required>
            <label for="opcion_22">Para señalar áreas para bicicletas</label><br>
            <input type="radio" id="opcion_23" name="respuesta6" value="Para demarcar carriles y calzadas" required>
            <label for="opcion_13">Para demarcar carriles y calzadas</label><br>
            <input type="radio" id="opcion_24" name="respuesta6" value="Para indicar la velocidad máxima" required>
            <label for="opcion_24">Para indicar la velocidad máxima</label><br><br>
        </div>
        <!-- Pregunta 7 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_7">7.-¿Qué indica una línea blanca que se encuentra cerca de las intersecciones?</label><br><br>
            <input type="radio" id="opcion_25" name="respuesta7" value="Punto de descanso para conductores" required>
            <label for="opcion_25">Punto de descanso para conductores</label><br>
            <input type="radio" id="opcion_26" name="respuesta7" value="Zona de estacionamiento permitido" required>
            <label for="opcion_26">Zona de estacionamiento permitido</label><br>
            <input type="radio" id="opcion_27" name="respuesta7" value="Prohibición de adelantar a otros vehículos" required>
            <label for="opcion_27">Prohibición de adelantar a otros vehículos</label><br>
            <input type="radio" id="opcion_28" name="respuesta7" value="Zona de carga y descarga" required>
            <label for="opcion_28">Zona de carga y descarga</label><br><br>
        </div>
        <!-- Pregunta 8 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_8">8.-¿Qué representa una línea continua en el centro de la carretera?</label><br><br>
            <input type="radio" id="opcion_29" name="respuesta8" value="Zona de adelantamiento permitido" required>
            <label for="opcion_29">Zona de adelantamiento permitido</label><br>
            <input type="radio" id="opcion_30" name="respuesta8" value="Carril exclusivo para vehículos grandes" required>
            <label for="opcion_30">Carril exclusivo para vehículos grandes</label><br>
            <input type="radio" id="opcion_31" name="respuesta8" value="Prohibición de cambiar de carril" required>
            <label for="opcion_31">Prohibición de cambiar de carril</label><br>
            <input type="radio" id="opcion_32" name="respuesta8" value="Separación de carriles en el mismo sentido" required>
            <label for="opcion_32">Separación de carriles en el mismo sentido</label><br><br>
        </div>
        <!-- Pregunta 9 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_9">9.-¿Cuál es la función de las demarcaciones para cruces en las intersecciones?</label><br><br>
            <input type="radio" id="opcion_33" name="respuesta9" value="Indicar la velocidad máxima permitida" required>
            <label for="opcion_33">Indicar la velocidad máxima permitida</label><br>
            <input type="radio" id="opcion_34" name="respuesta9" value="Señalar áreas de estacionamiento" required>
            <label for="opcion_34">Señalar áreas de estacionamiento</label><br>
            <input type="radio" id="opcion_35" name="respuesta9" value="Marcar el lugar donde deben cruzar los peatones" required>
            <label for="opcion_35">Marcar el lugar donde deben cruzar los peatones</label><br>
            <input type="radio" id="opcion_36" name="respuesta9" value="Indicar la disponibilidad de estaciones de servicio" required>
            <label for="opcion_36">Indicar la disponibilidad de estaciones de servicio</label><br><br>
        </div>
        <!-- Pregunta 10 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_10">10.-¿Cómo se llama la barra gruesa en el borde de la calle que deben usar los peatones para cruzar?</label><br><br>
            <input type="radio" id="opcion_34" name="respuesta10" value="Barrera de peatones" required>
            <label for="opcion_34">Barrera de peatones</label><br>
            <input type="radio" id="opcion_35" name="respuesta10" value="Franja de seguridad" required>
            <label for="opcion_35">Franja de seguridad</label><br>
            <input type="radio" id="opcion_36" name="respuesta10" value="Paso de cebra" required>
            <label for="opcion_36">Paso de cebra</label><br>
            <input type="radio" id="opcion_37" name="respuesta10" value="Zona de travesía" required>
            <label for="opcion_37">Zona de travesía</label><br><br>
        </div>
        <!-- Pregunta 11 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_11">11.-¿Qué importancia tienen las señales horizontales en la regulación del tráfico?</label><br><br>
            <input type="radio" id="opcion_38" name="respuesta11" value="Sirven para decorar las calles" required>
            <label for="opcion_38">Sirven para decorar las calles</label><br>
            <input type="radio" id="opcion_39" name="respuesta11" value="Son únicamente informativas" required>
            <label for="opcion_39">Son únicamente informativas</label><br>
            <input type="radio" id="opcion_40" name="respuesta11" value="Ayudan a orientar a los conductores y peatones" required>
            <label for="opcion_40">Ayudan a orientar a los conductores y peatones</label><br>
            <input type="radio" id="opcion_41" name="respuesta11" value="No tienen relevancia en la seguridad vial" required>
            <label for="opcion_41">No tienen relevancia en la seguridad vial</label><br><br>
        </div>
        <!-- Pregunta 12 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_12">12.-¿Cuál es la consecuencia de violar las normativas de las señales horizontales?</label><br><br>
            <input type="radio" id="opcion_42" name="respuesta12" value="Multas para los peatones" required>
            <label for="opcion_42">Multas para los peatones</label><br>
            <input type="radio" id="opcion_43" name="respuesta12" value="Multas para los conductores" required>
            <label for="opcion_43">Multas para los conductores</label><br>
            <input type="radio" id="opcion_44" name="respuesta12" value="Aumento de la velocidad máxima permitida" required>
            <label for="opcion_44">Aumento de la velocidad máxima permitida</label><br>
            <input type="radio" id="opcion_45" name="respuesta12" value="No hay consecuencias legales" required>
            <label for="opcion_45">No hay consecuencias legales</label><br><br>
        </div>
        <!-- Pregunta 13 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_13">13.-¿Por qué es importante conocer las señales horizontales como conductor o peatón?</label><br><br>
            <input type="radio" id="opcion_46" name="respuesta13" value="Para decorar las vías públicas" required>
            <label for="opcion_46">Para decorar las vías públicas</label><br>
            <input type="radio" id="opcion_47" name="respuesta13" value="Para evitar multas por estacionamiento" required>
            <label for="opcion_47">Para evitar multas por estacionamiento</label><br>
            <input type="radio" id="opcion_48" name="respuesta13" value="Para garantizar la seguridad vial y evitar infracciones" required>
            <label for="opcion_48">Para garantizar la seguridad vial y evitar infracciones</label><br>
            <input type="radio" id="opcion_49" name="respuesta13" value="Para conocer la ubicación de estaciones de servicio" required>
            <label for="opcion_49">Para conocer la ubicación de estaciones de servicio</label><br><br>
        </div>
        <!-- Pregunta 14 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_14">14.-¿Cuál es la función principal de las líneas transversales en una intersección vial?</label><br><br>
            <input type="radio" id="opcion_50" name="respuesta14" value="Indicar el límite de velocidad" required>
            <label for="opcion_50">Indicar el límite de velocidad</label><br>
            <input type="radio" id="opcion_51" name="respuesta14" value="Señalar zonas de estacionamiento" required>
            <label for="opcion_51">Señalar zonas de estacionamiento</label><br>
            <input type="radio" id="opcion_52" name="respuesta14" value="Marcar el lugar donde los vehículos deben detenerse" required>
            <label for="opcion_52">Marcar el lugar donde los vehículos deben detenerse</label><br>
            <input type="radio" id="opcion_53" name="respuesta14" value="Marcar el sentido único de la vía" required>
            <label for="opcion_53">Marcar el sentido único de la vía</label><br><br>
        </div>
        <!-- Pregunta 15 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta_15">15.-¿En qué tipo de vías se utilizan las señales horizontales para delimitar carriles exclusivos para ciertos vehículos?</label><br><br>
            <input type="radio" id="opcion_54" name="respuesta15" value="Únicamente en autopistas" required>
            <label for="opcion_54">Únicamente en autopistas</label><br>
            <input type="radio" id="opcion_55" name="respuesta15" value="En calles residenciales" required>
            <label for="opcion_55">En calles residenciales</label><br>
            <input type="radio" id="opcion_56" name="respuesta15" value="En vías de un solo carril" required>
            <label for="opcion_56">En vías de un solo carril</label><br>
            <input type="radio" id="opcion_57" name="respuesta15" value="En diversas vías, incluyendo carriles confinados para transporte público" required>
            <label for="opcion_57">En diversas vías, incluyendo carriles confinados para transporte público</label><br><br>
        </div>

        <input type="hidden" name="id_candidato" value="<?php echo $correo_usuario; ?>">

            <div class="text-center">
                <input type="submit" value="Enviar respuestas">
            <div>
        </form>
    </div>
    
</body>
</html>
        
        