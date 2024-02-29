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
    <link rel="stylesheet" type="text/css" href="seguridad_vial.css">
    <title>Conocimiento de sobre la seguridad vial</title>
    <style>
        .left-align{
            text-align: left;
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
                <h1>Conocimiento de sobre la seguridad vial</h1>
            </div>
        </div>
    </header>
    
    <main class="services container">
        <div class="service">
            <p><br><br><b><h1>Seguridad vial</h1></b></p>
            <p class="left-align"><br>Entendemos la seguridad vial como la prevención de accidentes de tránsito o la minimización de sus efectos, cuando tuviera lugar un accidente o incidente de tránsito. La seguridad se refiera a aquello que está exento de peligro, daño o riesgo. Así pues, la definición de seguridad vial es sinónimo de prevención de accidentes de tráfico. La seguridad vial tiene especial cuidado con los efectos que dichos incidentes pueden tener para la vida y la salud de las personas.</p>
            <p class="left-align"><br>Existen ciertas normas reguladoras de tránsito que, junto con la responsabilidad de los usuarios de la vía, forman el tándem principal en el que se basa la seguridad vial. Tanto instituciones públicas como asociaciones destinadas a preservar la seguridad en la carretera, deben promover campañas y cursos sobre seguridad y educación vial, para reforzar aspectos como la precaución en la conducción, el respeto a los agentes de tráfico, la protección a ciclistas, peatones y personas con discapacidad, la prevención de accidentes o el correcto uso del vehículo.</p>
            <p class="left-align"><br><b>DEFINICIÓN SEGURIDAD VIAL – SUS ELEMENTOS</b></p>
            <p class="left-align"><br>Existe una clasificación de los elementos de seguridad vial. Así pues, ésta se divide en primaria o activa, secundaria o pasiva y terciaria.</p>
            <p class="left-align"><br>La seguridad activa es la asistencia al conductor para evitar los posibles accidentes (ejemplo: luces de freno).</p>
            <p class="left-align"><br>La pasiva tiene como objetivo reducir las consecuencias de un accidente en el momento en el que ocurre (ejemplo: airbag, cinturón).</p>
            <p class="left-align"><br>Por último, la terciaria busca reducir las consecuencias, pero ya después del accidente (ejemplo: corte del combustible para evitar incendios).<br><br></p>

        <div class="service">
            <p><br><br><b><h1>Las Diez Reglas del Buen Conductor</h1></b></p>
            <p class="left-align"><br>La seguridad vial es componente prioritario de la política de movilidad del Gobierno de la Ciudad de México y la Secretaría de Movilidad (SEMOVI). Ésta consta de cuatro componentes: infraestructura segura, educación y concientización, uso de tecnología y esquema de sanciones orientado al cambio de conductas, y mejora en los procedimientos de atención a las víctimas. Dentro de la estrategia de educación y concientización, y en conjunto con las otras tres estrategias, SEMOVI impulsa la campaña masiva de Las 10 reglas del buen conductor.</p>
            <p class="left-align"><br>Consiste en un decálogo conciso, claro y fácil de aprender, con 10 reglas fundamentales para garantizar la seguridad de todas las personas que usamos las calles. ¡No hay pretextos para no cumplirlas!</p>
            <br><br><br><br><img src="imagenes/reglas.jpg">
            <p class="left-align"><br><br>Estas reglas buscan:</p>
            <p class="left-align"><br><b>*Disminuir el número de víctimas de incidentes de tránsito, con énfasis en usuarios más vulnerables.</b></p>
            <p class="left-align"><br><b>*Disminuir tiempos de viaje sin que eso signifique más velocidad, dando más fluidez al tráfico, al reducir la posibilidad de que haya bloqueos de la vía o incidentes de tránsito.</b></p>
            <p class="left-align"><br><b>*Mejorar la experiencia de viaje y uso del espacio público de todos los usuarios de la vía.</b></p>
            <p class="left-align"><br><b>*Priorizar las reglas más importantes para facilitar que toda la ciudadanía las aprenda, las recuerde y las cumpla, siendo copartícipes y recordándole a otros que las cumplan.</b></p>
            <p class="left-align"><br>En esta primera entrada sobre el tema, comenzamos por la regla número uno: Respetar los límites de velocidad. Los límites de velocidad existen para protegernos: proteger la vida de los más vulnerables y proteger la vida de los conductores. Por ejemplo, 50km/hr en vías primarias, compartidas con peatones, ciclistas, y motociclistas.</p>
            <p class="left-align"><br><b>¿Sabías que</b>, si una persona es atropellada por un vehículo que va a una velocidad de 30 km/hr, sus posibilidades de sobrevivir son de 95% pero, si es atropellada a 60 km/hr, sus probabilidades de sobrevivir caen a sólo 5%? Es por ello que es tan importante no rebasar el límite de 50 km/hr en vías primarias, 80 km/hr en vías de acceso controlado.</p>
            <p class="left-align"><br><b>¿Sabías que</b>, a una velocidad de 120 km/hr, en piso seco, necesitas un total de 90 metros para reaccionar y frenar? ¿Y que, en piso mojado, necesitas 146 metros? A menos que seas un conductor de Fórmula 1, en una pista de carreras, tu seguridad y la de todos está en riesgo cuando excedes los límites de velocidad, incluso en vías de acceso controlado.</p>
            <p class="left-align"><br>Si cumples las 10 reglas del buen conductor, serás un conductor ejemplar para los otros, reducirás el riesgo en el que tú mismo te pones al conducir, y te sumarás a proteger la vida de todos.</p>
            <p class="left-align"><br>Recuerda: somos cada vez más los que, como tú, queremos transformar nuestra ciudad y movernos seguros por las calles. Por una ciudad segura y amable para todos.<br><br></p>
        
        <div class="service">
            <p><br><br><b><h1>Cinturón de Seguridad</h1></b></p>
            <p class="left-align"><br><b>¿Qué es el Cinturón de Seguridad?</b></p>
            <p class="left-align"><br>El cinturón de seguridad es un arnés diseñado para proteger al conductor, así como a los pasajeros, mientras se trasladan de un punto a otro. Es el medio por el cual se sujetarán los ocupantes del auto si llegara a suceder algún tipo de accidente vehicular.</p>
            <p class="left-align"><br>Cabe mencionar que los cinturones de seguridad fueron implementados desde 1930 como parte del sistema de seguridad de las aeronaves y después de varios años, se empezó a implementar los cinturones de seguridad en los autos. Su objetivo es funcionar como un sistema de seguridad pasiva para todas las personas que se encuentran dentro de un vehículo.</p>
            <p class="left-align"><br>Los cinturones de seguridad de carro, junto con las bolsas de aire y la carrocería deformable, forman parte del sistema de seguridad de todos los automóviles y son de suma importancia para el bienestar de los conductores, pues en muchos casos, estos artefactos logran salvar la vida de los ocupantes.</p>
            <p class="left-align"><br><b>¿Para qué Sirve un Cinturón de Seguridad?</b></p>
            <p class="left-align"><br>Los cinturones de seguridad de carro sirven como una herramienta de seguridad pasiva, la cual buscará proteger a los pasajeros en caso de que haya un siniestro vial. Junto con las bolsas de aire, el cinturón de seguridad forma parte de los artefactos de seguridad de cualquier tipo de vehículo.</p>
            <p class="left-align"><br>El objetivo de los cinturones de seguridad es llegar a minimizar todas aquellas heridas y lesiones a las que puedan estar expuestas las personas que se encuentran a bordo del vehículo al momento de un accidente. Impidiendo también que estos se puedan llegar a impactar contra algún elemento que los ponga en riesgo o bien, contra las demás personas que se encuentran al interior o que sea expulsado del automóvil al ocurrir la colisión.</p>
            <p class="left-align"><br>Hoy en día, se utilizan cinturones de seguridad que cuentan con tensores que aseguran el cuerpo de los pasajeros al momento de impactarse contra un vehículo o artefacto; a través de un resorte. Un cinturón de seguridad se tendrá que colocar lo mayor pegado posible al cuerpo, totalmente plano y sin nudos o dobleces, esto es necesario para que puedas procurar la protección necesaria a todas las personas que se encuentren al interior.</p>
            <p class="left-align"><br>Existen múltiples tipos de cinturones de seguridad y cada uno de ellos protege de manera diferente a la población, nos enfocaremos, en el cinturón de seguridad de tres puntos.</p>
            <p class="left-align"><br><b>Cinturón de Seguridad de Tres Puntos</b></p>
            <p class="left-align"><br>Los cinturones de seguridad de tres puntos incluyen un cinturón en la falda del asiento y otro que va desde el punto de anclaje en el primero, hasta otro punto que pasa por encima del hombro del pasajero.</p>
            <p class="left-align"><br>Para un correcto uso del cinturón de seguridad es importante considerar lo siguiente:</p>
            <p class="left-align"><br><u><b>*Todos y cada uno de los ocupantes de asientos delanteros y traseros deben usarlo.</b></u></p>
            <p class="left-align"><br><u><b>*La banda de tela no debe encontrarse desgastada, con cortes o presentar bordes dañados.</b></u></p>
            <p class="left-align"><br><u><b>*La cinta superior debe pasar por el hombro y no por el cuello o garganta.</b></u></p>
            <p class="left-align"><br><u><b>*La cinta inferior debe cruzar sobre los huesos de la cadera y no del estómago.</b></u></p>
            <p class="left-align"><br><u><b>*Debe abrocharse sin dobleces y bien ajustado al cuerpo.</b></u></p>
            <p class="left-align"><br><u><b>*Debe utilizarse en tramos cortos o largos ya sea en ciudad o carretera.</b></u></p>
            <br><br><br><br><img src="imagenes/cinturon.jpg">
                
        </div>         
    </main>
    
    <footer>

    </footer>  
</body>
</html>