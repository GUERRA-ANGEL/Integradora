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
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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
    </header>


<div class="container1"><br><br>
    <div class="titulo text-center mt-4">
        <h1>Evaluación sobre conocimientos de situaciones de transito</h1>
    </div><br><br>
    <form id="examenForm" class="mt-4" action="guardar_evaluacion.php" method="POST">
        <!-- Pregunta 1 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta1">1.-¿Qué es la Educación Vial?</label><br><br>
            <input type="radio" id="opcion_1" name="respuesta1" value="Es el conjunto de conocimientos y normas de conducta establecidos para utilizar correctamente las vías públicas y los medios de transporte" required>
            <label for="opcion_1">Es el conjunto de conocimientos y normas de conducta establecidos para utilizar correctamente las vías públicas y los medios de transporte</label><br>
            <input type="radio" id="opcion_2" name="respuesta1" value="Es el conjunto de reglas y normas de conducta que se les imparte a los elementos de vialidad" required>
            <label for="opcion_2">Es el conjunto de reglas y normas de conducta que se les imparte a los elementos de vialidad</label><br>
            <input type="radio" id="opcion_3" name="respuesta1" value="Es el conjunto de reglas, normas de conducta y conocimiento de los transeúntes" required>
            <label for="opcion_3">Es el conjunto de reglas, normas de conducta y conocimiento de los transeúntes</label><br>
            <input type="radio" id="opcion_4" name="respuesta1" value="Es la educación que se recibe ampliamente en la calle" required>
            <label for="opcion_4">Es la educación que se recibe ampliamente en la calle</label><br><br>
        </div>

        <!-- Pregunta 2 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta2">2.-¿Cuál es la principal causa de accidentes de tránsito?</label><br><br>
            <input type="radio" id="Exceso de velocidad" name="respuesta2" value="Exceso de velocidad" required>
            <label for="opcion_5">Exceso de velocidad</label><br>
            <input type="radio" id="opcion_6" name="respuesta2" value="Uso del teléfono móvil mientras se conduce" required>
            <label for="opcion_6">Uso del teléfono móvil mientras se conduce</label><br>
            <input type="radio" id="opcion_7" name="respuesta2" value="Conducir bajo los efectos del alcohol o las drogas" required>
            <label for="opcion_7">Conducir bajo los efectos del alcohol o las drogas</label><br>
            <input type="radio" id="opcion_8" name="respuesta2" value="No respetar las señales de tránsito" required>
            <label for="opcion_8">No respetar las señales de tránsito</label><br><br>
        </div>

        <!-- Pregunta 3 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta3">3.-¿Cuál es la definición de peatón?</label><br><br>
            <input type="radio" id="opcion_9" name="respuesta3" value="Es toda persona que conduce un vehículo automotor" required>
            <label for="opcion_9">Es toda persona que conduce un vehículo automotor</label><br>
            <input type="radio" id="opcion_10" name="respuesta3" value="Es aquella persona que tiene el pie grande" required>
            <label for="opcion_10">Es aquella persona que tiene el pie grande</label><br>
            <input type="radio" id="opcion_11" name="respuesta3" value="Es toda persona que transita a pie por las vialidades" required>
            <label for="opcion_11">Es toda persona que transita a pie por las vialidades</label><br>
            <input type="radio" id="opcion_12" name="respuesta3" value="Es toda persona que conduce un patín" required>
            <label for="opcion_12">Es toda persona que conduce un patín</label><br><br>
        </div>

        <!-- Pregunta 4 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta4">4.-En cuestiones viales, ¿cuál es la definición de Conductor?</label><br><br>
            <input type="radio" id="opcion_13" name="respuesta4" value="Es un cable" required>
            <label for="opcion_13">Es un cable</label><br>
            <input type="radio" id="opcion_14" name="respuesta4" value="Es toda aquella persona que guía o conduce un vehículo automotor" required>
            <label for="opcion_14">Es toda aquella persona que guía o conduce un vehículo automotor</label><br>
            <input type="radio" id="opcion_15" name="respuesta4" value="Es cualquier cosa que transporta electricidad" required>
            <label for="opcion_15">Es cualquier cosa que transporta electricidad</label><br><br>
        </div>

        <!-- Pregunta 5 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta5">5.-La definicion de Vehiculo es:</label><br><br>
            <input type="radio" id="opcion_17" name="respuesta5" value="Es todo artefacto empleado para almacenar documentos" required>
            <label for="opcion_17">Es todo artefacto empleado para almacenar documentos</label><br>
            <input type="radio" id="opcion_18" name="respuesta5" value="Es cualquier artefacto empleado para el transporte de personas o cosas, con excepcion de aquellos en los que se utiiza el esfuerzo humano a pie" required>
            <label for="opcion_18">Es cualquier artefacto empleado para el transporte de personas o cosas, con excepcion de aquellos en los que se utiiza el esfuerzo humano a pie</label><br>
            <input type="radio" id="opcion_19" name="respuesta5" value="Es todo aquel artefacto utilizado para pintar" required>
            <label for="opcion_19">Es todo aquel artefacto utilizado para pintar</label><br>
            <input type="radio" id="opcion_20" name="respuesta5" value="Es todo aquel artefacto que sirve para hablar" required>
            <label for="opcion_20">Es todo aquel artefacto que sirve para hablar</label><br><br>
        </div>

        <!-- Pregunta 6 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta6">6.-Por el servicio al que se destinan los vehículos se dividen en:</label><br><br>
            <input type="radio" id="opcion_21" name="respuesta6" value="Deportivos, de carga y particulares" required>
            <label for="opcion_21">Deportivos, de carga y particulares</label><br>
            <input type="radio" id="opcion_22" name="respuesta6" value="Especiales, De arrastre y de transporte público" required>
            <label for="opcion_22">Especiales, De arrastre y de transporte público</label><br>
            <input type="radio" id="opcion_23" name="respuesta6" value="Particular, Público, Especial de Transporte y Social" required>
            <label for="opcion_24">Particular, Público, Especial de Transporte y Social</label><br>
            <input type="radio" id="opcion_25" name="respuesta6" value="Camiones, Autos y Pick Ups" required>
            <label for="opcion_25">Camiones, Autos y Pick Ups</label><br><br>
        </div>
        
        <!-- Pregunta 7 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta7">7.-Las vías públicas por su clasificación, se dividen en:</label><br><br>
            <input type="radio" id="opcion_26" name="respuesta7" value="Urbanas y Suburbanas" required>
            <label for="opcion_26">Urbanas y Suburbanas</label><br>
            <input type="radio" id="opcion_27" name="respuesta7" value="Suburbanas, Rurales y Ejidales" required>
            <label for="opcion_27">Suburbanas, Rurales y Ejidales</label><br>
            <input type="radio" id="opcion_28" name="respuesta7" value="Públicas y Privadas" required>
            <label for="opcion_28">Públicas y Privadas</label><br>
            <input type="radio" id="opcion_29" name="respuesta7" value="Urbanas y Foráneas" required>
            <label for="opcion_29">Urbanas y Foráneas</label><br><br>
        </div>

        <!-- Pregunta 8 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta8">8.-Las señales gráficas se clasifican en:</label><br><br>
            <input type="radio" id="opcion_30" name="respuesta8" value="Retrogradas, Retentivas y Prevalentes" required>
            <label for="opcion_30">Retrogradas, Retentivas y Prevalentes</label><br>
            <input type="radio" id="opcion_31" name="respuesta8" value="Informativas, Restrictivas y Preventivas" required>
            <label for="opcion_31">Informativas, Restrictivas y Preventivas</label><br>
            <input type="radio" id="opcion_32" name="respuesta8" value="Prelocalizables, Restauradoras e Informadas" required>
            <label for="opcion_32">Prelocalizables, Restauradoras e Informadas</label><br>
            <input type="radio" id="opcion_33" name="respuesta8" value="Ambivalentes, Reprimidas y Astringentes" required>
            <label for="opcion_33">Ambivalentes, Reprimidas y Astringentes</label><br><br>
        </div>

        <!-- Pregunta 9 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta9">9.-La aseveración "Las señales preventivas tienen el propósito de informar al usuario de la existencia de reglamentaciones que rigen el tránsito y los peatones" es:</label><br><br>
            <input type="radio" id="opcion_34" name="respuesta9" value="True" required>
            <label for="opcion_34">True</label><br>
            <input type="radio" id="opcion_35" name="respuesta9" value="False" required>
            <label for="opcion_35">False</label><br><br>
        </div>

        <!-- Pregunta 10 -->
        <div class="recuadro p-3 mb-3 border">
            <label for="pregunta10">10.-La siguiente imagen es ejemplo de una señal RESTRICTIVA:</label><br><br>
            <img src="https://cdn.goconqr.com/uploads/true_or_false_question/image/1040872/desktop_fbc57396-60a0-450f-85a2-5e02cb3c62ed.jpg" alt="Ejemplo de señal restrictiva"><br><br>
            <input type="radio" id="opcion_36" name="respuesta10" value="True" required>
            <label for="opcion_36">True</label><br>
            <input type="radio" id="opcion_37" name="respuesta10" value="False" required>
            <label for="opcion_37">False</label><br><br>
        </div>

    
        
        <!-- Pregunta 11 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta11">11.-La señal preventiva debe provocar que el conductor adopte medidas de precaución y llamar la atención hacia una reducción de velocidad:</label><br><br>
            <input type="radio" id="opcion_38" name="respuesta11" value="True" required>
            <label for="opcion_38">True</label><br>
            <input type="radio" id="opcion_39" name="respuesta11" value="False" required>
            <label for="opcion_39">False</label><br><br>
        </div>
        
        <!-- Pregunta 12 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta12">12.-De acuerdo a su clasificación, podemos afirmar que las imágenes que se muestran anteriormente corresponden a señales INFORMATIVAS DE DESTINO.</label><br><br>
            <img src="https://cdn.goconqr.com/uploads/true_or_false_question/image/1041013/desktop_0656b890-264b-46dc-8c14-425b7b1e0843.jpg" alt="Señales informativas de destino"><br><br>
            <input type="radio" id="opcion_40" name="respuesta12" value="True" required>
            <label for="opcion_40">True</label><br>
            <input type="radio" id="opcion_41" name="respuesta12" value="False" required>
            <label for="opcion_41">False</label><br><br>
        </div>
        
        <!-- Pregunta 13 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta13">13.-Los tipos de Licencias que existen son:</label><br><br>
            <input type="radio" id="opcion_42" name="respuesta13" value="Automovilista" required>
            <label for="opcion_42">Automovilista</label><br>
            <input type="radio" id="opcion_43" name="respuesta13" value="Motociclista" required>
            <label for="opcion_43">Motociclista</label><br>
            <input type="radio" id="opcion_44" name="respuesta13" value="Ciclista" required>
            <label for="opcion_44">Ciclista</label><br>
            <input type="radio" id="opcion_45" name="respuesta13" value="Chofer" required>
            <label for="opcion_45">Chofer</label><br>
            <input type="radio" id="opcion_46" name="respuesta13" value="Automovilista, Ciclista y Chofer" required>
            <label for="opcion_46">Automovilista, Ciclista y Chofer</label><br>
            <input type="radio" id="opcion_47" name="respuesta13" value="Motociclista, Automovilista, Chofer Servicio Particular y Chofer Servicio Publico" required>
            <label for="opcion_47">Motociclista, Automovilista, Chofer Servicio Particular y Chofer Servicio Publico</label><br>
            <input type="radio" id="opcion_48" name="respuesta13" value="Chofer, Automovilista y Motociclista" required>
            <label for="opcion_48">Chofer, Automovilista y Motociclista</label><br><br>
        </div>
        
        <!-- Pregunta 14 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta14">14.-Elige las respuestas correctas:<br>Antes de salir, ¿cuáles son los puntos del vehículo que debes revisar OBLIGATORIAMENTE?</label><br><br>
            <input type="checkbox" id="opcion_49" name="respuesta14" value="Niveles adecuados de Aceite de motor, Aceite de Transmisión y Aceite de Dirección Hidráulica">
            <label for="opcion_49">Niveles adecuados de Aceite de motor, Aceite de Transmisión y Aceite de Dirección Hidráulica</label><br>
            <input type="checkbox" id="opcion_50" name="respuesta14" value="Niveles adecuados de Anticongelante-refrigerante, líquido de frenos, líquido limpiaparabrisas">
            <label for="opcion_50">Niveles adecuados de Anticongelante-refrigerante, líquido de frenos, líquido limpiaparabrisas</label><br>
            <input type="checkbox" id="opcion_51" name="respuesta14" value="Ajuste de espejos de vanidad y retrovisor">
            <label for="opcion_51">Ajuste de espejos de vanidad y retrovisor</label><br>
            <input type="checkbox" id="opcion_52" name="respuesta14" value="Presión de neumáticos y estado de los mismos">
            <label for="opcion_52">Presión de neumáticos y estado de los mismos</label><br>
            <input type="checkbox" id="opcion_53" name="respuesta14" value="Dibujo de los neumáticos">
            <label for="opcion_53">Dibujo de los neumáticos</label><br>
            <input type="checkbox" id="opcion_54" name="respuesta14" value="Estado de las luces (delanteras, traseras, de freno, reversa, direccionales, torreta, perimetrales, etc)">
            <label for="opcion_54">Estado de las luces (delanteras, traseras, de freno, reversa, direccionales, torreta, perimetrales, etc)</label><br>
            <input type="checkbox" id="opcion_55" name="respuesta14" value="Chequeo y ajuste de los asientos traseros">
            <label for="opcion_55">Chequeo y ajuste de los asientos traseros</label><br>
            <input type="checkbox" id="opcion_56" name="respuesta14" value="Ajuste de Espejos Laterales">
            <label for="opcion_56">Ajuste de Espejos Laterales</label><br><br>
        </div>
        
        <!-- Pregunta 15 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta15">15.-El límite de velocidad permitido para circular en zonas escolares, peatonales, hospitales y lugares de reunión como asilos y albergues es:</label><br><br>
            <input type="radio" id="opcion_57" name="respuesta15" value="60 Km/hr" required>
            <label for="opcion_57">60 Km/hr</label><br>
            <input type="radio" id="opcion_58" name="respuesta15" value="20 Km/hr" required>
            <label for="opcion_58">20 Km/hr</label><br>
            <input type="radio" id="opcion_59" name="respuesta15" value="40 Km/hr" required>
            <label for="opcion_59">40 Km/hr</label><br>
            <input type="radio" id="opcion_60" name="respuesta15" value="110 Km/hr" required>
            <label for="opcion_60">110 Km/hr</label><br><br>
        </div>
        
        <!-- Pregunta 16 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta16">16.-¿En dónde se prohíbe el estacionamiento de cualquier clase de vehículo?</label><br><br>
            <input type="radio" id="opcion_61" name="respuesta16" value="Camellones, andadores y retornos" required>
            <label for="opcion_61">Camellones, andadores y retornos</label><br>
            <input type="radio" id="opcion_62" name="respuesta16" value="En lugares señalados con raya blanca" required>
            <label for="opcion_62">En lugares señalados con raya blanca</label><br>
            <input type="radio" id="opcion_63" name="respuesta16" value="Frente a rampas especiales para personas con capacidades diferentes" required>
            <label for="opcion_63">Frente a rampas especiales para personas con capacidades diferentes</label><br>
            <input type="radio" id="opcion_64" name="respuesta16" value="En estacionamientos públicos y privados" required>
            <label for="opcion_64">En estacionamientos públicos y privados</label><br>
            <input type="radio" id="opcion_65" name="respuesta16" value="En espacios reservados para los peatones" required>
            <label for="opcion_65">En espacios reservados para los peatones</label><br>
            <input type="radio" id="opcion_66" name="respuesta16" value="En los cajones de estacionamiento no señalados para personas con discapacidad" required>
            <label for="opcion_66">En los cajones de estacionamiento no señalados para personas con discapacidad</label><br><br>
        </div>
        
        <!-- Pregunta 17 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta17">17.-Si hay un cruce ferroviario por delante y una luz roja intermitente le indica que un tren está aproximándose, usted debe:</label><br><br>
            <input type="radio" id="opcion_67" name="respuesta17" value="Disminuir la velocidad antes de cruzar" required>
            <label for="opcion_67">Disminuir la velocidad antes de cruzar</label><br>
            <input type="radio" id="opcion_68" name="respuesta17" value="Disminuir la velocidad y avanzar con precaución" required>
            <label for="opcion_68">Disminuir la velocidad y avanzar con precaución</label><br>
            <input type="radio" id="opcion_69" name="respuesta17" value="Detenerse y no proceder hasta que la luz roja deje de parpadear" required>
            <label for="opcion_69">Detenerse y no proceder hasta que la luz roja deje de parpadear</label><br>
            <input type="radio" id="opcion_70" name="respuesta17" value="Aumentar la velocidad y cruzar la línea férrea tan pronto como le sea posible" required>
            <label for="opcion_70">Aumentar la velocidad y cruzar la línea férrea tan pronto como le sea posible</label><br><br>
        </div>
        
        <!-- Pregunta 18 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta18">18.-¿Qué debe hacer usted, si al llegar a una intersección donde desea virar a la derecha se encuentra un ciclista por delante de su vehículo?</label><br><br>
            <input type="radio" id="opcion_71" name="respuesta18" value="Pasar al ciclista ya que usted tiene el derecho de vía" required>
            <label for="opcion_71">Pasar al ciclista ya que usted tiene el derecho de vía</label><br>
            <input type="radio" id="opcion_72" name="respuesta18" value="Pasar al ciclista y rápidamente virar a la derecha" required>
            <label for="opcion_72">Pasar al ciclista y rápidamente virar a la derecha</label><br>
            <input type="radio" id="opcion_73" name="respuesta18" value="Dejar que el ciclista se movilice delante de usted, para luego usted proceder y virar a la derecha" required>
            <label for="opcion_73">Dejar que el ciclista se movilice delante de usted, para luego usted proceder y virar a la derecha</label><br>
            <input type="radio" id="opcion_74" name="respuesta18" value="Todas las respuestas son correctas" required>
            <label for="opcion_74">Todas las respuestas son correctas</label><br><br>
        </div>
        
        <!-- Pregunta 19 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta19">19.-¿En dónde debe comenzar a hacer una vuelta en U, si se encuentra en una carretera con múltiples carriles?</label><br><br>
            <input type="radio" id="opcion_9" name="respuesta19" value="Cualquier carril" required>
            <label for="opcion_75">Cualquier carril</label><br>
            <input type="radio" id="opcion_10" name="respuesta19" value="El carril derecho" required>
            <label for="opcion_76">El carril derecho</label><br>
            <input type="radio" id="opcion_11" name="respuesta19" value="El carril distante por el lado izquierdo" required>
            <label for="opcion_77">El carril distante por el lado izquierdo</label><br>
            <input type="radio" id="opcion_12" name="respuesta19" value="El carril central" required>
            <label for="opcion_78">El carril central</label><br><br>
        </div>

        <!-- Pregunta 20 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta20">20.-¿Qué significa el término "colchón espacial"?</label><br><br>
            <input type="radio" id="opcion_79" name="respuesta20" value="Mantener un asiento acolchonado para proteger su cuerpo en el caso de un accidente vehicular" required>
            <label for="opcion_79">Mantener un asiento acolchonado para proteger su cuerpo en el caso de un accidente vehicular</label><br>
            <input type="radio" id="opcion_80" name="respuesta20" value="Mantener un espacio libre de 60 pies alrededor del vehículo" required>
            <label for="opcion_80">Mantener un espacio libre de 60 pies alrededor del vehículo</label><br>
            <input type="radio" id="opcion_81" name="respuesta20" value="Ninguno de ellos" required>
            <label for="opcion_81">Ninguno de ellos</label><br>
            <input type="radio" id="opcion_82" name="respuesta20" value="El espacio entre su vehículo, el que se encuentra delante del suyo, detrás suyo y a los lados" required>
            <label for="opcion_82">El espacio entre su vehículo, el que se encuentra delante del suyo, detrás suyo y a los lados</label><br><br>
        </div>
        
        <!-- Pregunta 21 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta21">21.-¿Cuál de las siguientes es la manera correcta de cambiar carriles?</label><br><br>
            <input type="radio" id="opcion_83" name="respuesta21" value="Sonar la bocina y utilizar los gestos apropiados para indicar su intención de cambiar carril" required>
            <label for="opcion_83">Sonar la bocina y utilizar los gestos apropiados para indicar su intención de cambiar carril</label><br>
            <input type="radio" id="opcion_84" name="respuesta21" value="Solamente ver retrovisores" required>
            <label for="opcion_84">Solamente ver retrovisores</label><br>
            <input type="radio" id="opcion_85" name="respuesta21" value="Activar señal intermitente, ver retrovisores y luego ver punto(s) ciego(s)" required>
            <label for="opcion_85">Activar señal intermitente, ver retrovisores y luego ver punto(s) ciego(s)</label><br>
            <input type="radio" id="opcion_86" name="respuesta21" value="Activar señal intermitente y disminuir la velocidad" required>
            <label for="opcion_86">Activar señal intermitente y disminuir la velocidad</label><br><br>
        </div>
        
        <!-- Pregunta 22 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta22">22.-Cuando se aproxima a una glorieta, usted debe:</label><br><br>
            <input type="radio" id="opcion_87" name="respuesta22" value="Ceder el paso a cualquier automóvil ya circulando en el redondel" required>
            <label for="opcion_87">Ceder el paso a cualquier automóvil ya circulando en el redondel</label><br>
            <input type="radio" id="opcion_88" name="respuesta22" value="Cederle el paso a ciclistas" required>
            <label for="opcion_88">Cederle el paso a ciclistas</label><br>
            <input type="radio" id="opcion_89" name="respuesta22" value="Cederle al paso a los peatones" required>
            <label for="opcion_89">Cederle al paso a los peatones</label><br>
            <input type="radio" id="opcion_90" name="respuesta22" value="Todas las respuestas son correctas" required>
            <label for="opcion_90">Todas las respuestas son correctas</label><br><br>
        </div>
        
        <!-- Pregunta 23 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta23">23.-Una velocidad se considera segura para manejar, cuando...</label><br><br>
            <input type="radio" id="opcion_91" name="respuesta23" value="Depende del estado del tiempo y de las condiciones de la carretera" required>
            <label for="opcion_91">Depende del estado del tiempo y de las condiciones de la carretera</label><br>
            <input type="radio" id="opcion_92" name="respuesta23" value="Es menor a la velocidad máxima indicada" required>
            <label for="opcion_92">Es menor a la velocidad máxima indicada</label><br>
            <input type="radio" id="opcion_93" name="respuesta3" value="Es la indicada como velocidad máxima" required>
            <label for="opcion_93">Es la indicada como velocidad máxima</label><br>
            <input type="radio" id="opcion_94" name="respuesta23" value="Es un poco mayor que la velocidad máxima indicada" required>
            <label for="opcion_95">Es un poco mayor que la velocidad máxima indicada</label><br><br>
        </div>
        
        <!-- Pregunta 24 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta24">24.-Al ingresar a una autopista, siempre debemos recordar que:</label><br><br>
            <img src="https://cdn.goconqr.com/uploads/multiple_choice_question/image/1057470/desktop_d2ca54a3-b804-486b-8900-b08f64b32e8c.jpg" alt="Señal de autopista"><br><br>
            <input type="radio" id="opcion_96" name="respuesta24" value="Usted tiene el derecho de vía" required>
            <label for="opcion_96">Usted tiene el derecho de vía</label><br>
            <input type="radio" id="opcion_97" name="respuesta24" value="Camiones grandes tienen el derecho de vía" required>
            <label for="opcion_97">Camiones grandes tienen el derecho de vía</label><br>
            <input type="radio" id="opcion_98" name="respuesta24" value="Los vehículos circulando por la autopista siempre llevan la preferencia" required>
            <label for="opcion_98">Los vehículos circulando por la autopista siempre llevan la preferencia</label><br>
            <input type="radio" id="opcion_99" name="respuesta24" value="Vehículos pequeños tienen el derecho de vía" required>
            <label for="opcion_99">Vehículos pequeños tienen el derecho de vía</label><br><br>
        </div>
        
        <!-- Pregunta 25 -->
        <div class="recuadro p-3 mb-3 border"> 
            <label for="pregunta25">25.-Líneas sólidas amarillas dobles duplicadas, separadas a una distancia de 50 cm o más, indican:</label><br><br>
            <img src="https://cdn.goconqr.com/uploads/multiple_choice_question/image/1057473/desktop_0ebcb95a-fb8b-4277-9773-2c1530b864f4.png" alt="Líneas sólidas amarillas dobles duplicadas"><br><br>
            <input type="radio" id="opcion_100" name="respuesta3" value="Que el rebasar es permitido" required>
            <label for="opcion_100">Que el rebasar es permitido</label><br>
            <input type="radio" id="opcion_101" name="respuesta25" value="Que el virar en U es permitido" required>
            <label for="opcion_101">Que el virar en U es permitido</label><br>
            <input type="radio" id="opcion_102" name="respuesta25" value="Que el virar a la izquierda es permitido" required>
            <label for="opcion_102">Que el virar a la izquierda es permitido</label><br>
            <input type="radio" id="opcion_103" name="respuesta25" value="El equivalente a una barrera de concreto" required>
            <label for="opcion_103">El equivalente a una barrera de concreto</label><br><br>
        </div>

        <input type="hidden" name="id_candidato" value="<?php echo $correo_usuario; ?>">

        <div class="text-center">
            <input type="submit" value="Enviar respuestas">
        <div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
