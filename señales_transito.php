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
    <link rel="stylesheet" type="text/css" href="señales_transito.css">
    <title>Señales de tráfico y sus significados</title>
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
                <h1>Señales de tráfico y sus significados</h1>
            </div>
        </div>
    </header>
    
    <main class="services container">
        <div class="service">
            <p><br><br><b><h1>¿Qué son y para que sirven las señales de tránsito?</h1></b></p>
            <p class="left-align"><br>Las señales de tránsito son dispositivos visuales ubicados en carreteras, calles y vías públicas que tienen como objetivo regular, guiar y controlar el tráfico vehicular y peatonal. Estas señales desempeñan un papel crucial en la seguridad vial (se verá en un tema posterior) y ayudan a mantener el orden y la fluidez en las vías, evitando accidentes y asegurando el respeto a las normas de circulación.</p>
            <p class="left-align"><br>Las señales de tránsito se utilizan para los siguientes propósitos:</p>
            <p class="left-align"><br><b>Seguridad vial:</b> Proporcionan advertencias sobre posibles peligros y situaciones inusuales en la carretera, como curvas pronunciadas, intersecciones, cruces de peatones, zonas escolares, obras en la vía, entre otros. De esta manera, los conductores pueden estar alerta y tomar precauciones adecuadas.</p>
            <p class="left-align"><br><b>Regulación de la circulación:</b> Indican a los conductores cuándo deben detenerse, ceder el paso, reducir la velocidad, adelantar o seguir una dirección específica. Las señales de regulación aseguran un flujo ordenado y seguro del tráfico en las vías.</p>
            <p class="left-align"><br><b>Prohibiciones y restricciones:</b> Informan a los conductores sobre acciones que están prohibidas o restringidas en ciertas áreas o situaciones, como estacionar en determinados lugares, girar en una dirección específica, usar dispositivos móviles mientras se conduce, entre otras.</p>
            <p class="left-align"><br><b>Información geográfica:</b> Proporcionan datos útiles sobre direcciones, distancias a ciudades, ubicación de servicios (como gasolineras, hospitales, hoteles, etc.) y otros puntos de interés para los conductores.</p>
            <p class="left-align"><br><b>Orientación y destino:</b> Ayudan a los conductores a encontrar su camino proporcionando información sobre las rutas que deben seguir para llegar a ciertos destinos o ciudades.</p>
            <p class="left-align"><br><b>Seguridad para peatones:</b> También incluyen señales específicas para guiar a los peatones y garantizar su seguridad en cruces y zonas de paso.</p>
            <p class="left-align"><br>Las señales de tránsito son una parte esencial de las regulaciones de tráfico y están respaldadas por leyes y normativas establecidas por las autoridades de tránsito de cada país o jurisdicción. Su cumplimiento es obligatorio, y el desconocimiento o ignorancia de las señales de tránsito no exime a los conductores de responsabilidad en caso de incumplimiento o accidente. Por lo tanto, es esencial que todos los conductores y peatones comprendan el significado de las señales y las respeten para garantizar la seguridad de todos en las vías públicas.<br><br></p>

        <div class="service">
            <p><br><br><b><h1>Tipos de señalamientos.</h1></b></p>
            <p class="left-align"><br>Como ya lo vimos las señales de tránsito son imágenes que puedes encontrar en tu ruta de trabajo. Pero no son simples imágenes, ya que todas cuentan con un símbolo, color o forma que representa algo.</p>
            <p class="left-align"><br>Los elementos que forman parte de la señalización y dispositivos de seguridad son el conjunto integrado de marcas, señales y dispositivos de seguridad que indican la geometría de las carreteras y vialidades urbanas y dependiendo de su ubicación se clasifican en: señalamiento vertical, señalamiento horizontal y dispositivos de seguridad.</p>
            <p class="left-align"><br><b>1.-Señalamiento vertical:</b> El señalamiento vertical es el conjunto de señales en tableros con leyendas y pictogramas fijados en postes, marcos y otras estructuras. Según su propósito estas señales se clasifican en: <b>señales restrictivas, señales preventivas, señales informativas, señales turísticas y de servicios y señales de mensaje cambiable.</b></p>
            <p class="left-align"><br><b>2.-Señalamiento horizontal:</b> El señalamiento horizontal es el conjunto de marcas y dispositivos que se pintan o colocan sobre el pavimento, guarniciones y estructuras con el propósito de delinear las características geométricas de las carreteras y vialidades urbanas.</p>
            <p class="left-align"><br>Sirve también para denotar todos aquellos elementos estructurales que estén instalados dentro del derecho de vía, para regular y canalizar el tránsito de vehículos y peatones, así como proporcionar información a los usuarios.</p>
            <p class="left-align"><br><b>3.- Dispositivos de seguridad:</b> Los dispositivos de seguridad son elementos que tienen como propósito impedir o disminuir los efectos por fallas en la conducción del usuario, condiciones meteorológicas o por fallas mecánicas, que propicien la salida de la vialidad o colisión con un objeto fijo, pudiendo ser barreras de protección, amortiguadores de impacto y alertadores de salida de la vialidad.<br><br></p>
        
        <div class="service">
            <p><br><br><b><h1>Señalamiento Vertical</h1></b></p>
            <p class="left-align"><br>Se denomina señal vertical a toda señal instalada al costado o sobre el camino. Estas se utilizan para prevenir o informar a los usuarios (conductores o peatones) sobre cualquier eventualidad que pueda encontrarse en el camino.</p>
            <p class="left-align"><br>Las señales verticales fueron creadas para reglamentar, prevenir e informar al usuario de la vía. Su uso es fundamental principalmente en lugares donde existen regulaciones especiales, permanentes o temporales, y en aquellos donde los peligros no siempre son evidentes.</p>
            <p class="left-align"><br>Señalamiento Vertical, se clasifica en 3 tipos básicos:</p>
            <p class="left-align"><br><b>Señales restrictivas:</b> En el reglamento de tránsito, existen varios tipos de señales, entre ellas las que llamamos Restrictivas, pues muestran prohibiciones físicas o reglamentarias de la circulación e indican al conductor una acción que le permite transitar con mayor seguridad. Su característica principal es el color rojo (con caracteres e iconografía blanca y negra) y siempre deberían estar colocadas en postes.</p>
            <br><br><br><br><img src="imagenes/Señales.jpg">
            <p class="left-align"><br>Existen varios tipos de señales de tránsito restrictivas y cada una de ellas muestra una distinta prohibición que suele ser en favor del tránsito seguro, preservación de la infraestructura y evitar contratiempos que pueden tener lugar en un tramo específico. La señal restrictiva más conocida es el alto y se aplica en estas condiciones o situaciones;</p>
            <p class="left-align"><br>1.-En la intersección de dos carreteras con gran afluencia de vehículos.</p>
            <p class="left-align"><br>2.-En el punto donde un camino secundario se cruza con una carretera principal con mucho tráfico.</p>
            <p class="left-align"><br>3.-En el cruce de cualquier camino con una línea férrea, donde la seguridad ferroviaria y vial es fundamental.</p>
            <p class="left-align"><br>4.-En cruces urbanos donde el riesgo de accidentes es significativamente alto, siendo vital tomar medidas para proteger la seguridad de todos los usuarios de la vía pública.</p>
            <p class="left-align"><br>Conoce las distintas señales de la carretera conocerla será de mucha utilidad para evitar accidentes futuros y conducir más seguro.</p>
            <br><br><br><br><img src="imagenes/alto.png">
            <p class="left-align">Alto: Señal de tránsito más restrictiva.</p><br><br><br>

        <div class="service">
            <p><br><br><b><h1>Prohibiciones</h1></b></p>
            <p class="left-align"><br>SEstas señales de tránsito generalmente evitan las obstrucciones por vehículos lentos, estacionados o que fluctúan su velocidad, como los camiones colectivos o la maquinaria especializada. También indican que es peligroso hacer paradas, pues se coloca en un tramo donde los vehículos toman velocidad.</p>
            <p class="left-align"><br><b>Prohibido estacionarse: </b>Se utiliza en zonas en donde está prohibido estacionarse.</p>
            <br><br><br><br><img src="imagenes/pro_estacionarse.jpg"> 
            <p class="left-align"><br><b>Parada prohibida: </b> Se utiliza para indicar a conductores de transporte.</p>
            <br><br><br><br><img src="imagenes/pro_parada.png">
            <p class="left-align"><br><b>No parar: </b> La señal prohíbe a los vehículos detenerse. Se utiliza en avenidas de circulación rápida, así como en las entradas y salidas de emergencia.</p>
            <br><br><br><br><img src="imagenes/no_parar.png">
            <p class="left-align"><br><b>No rebasar: </b> La señal de tránsito prohíbe a los conductores rebasar en la zona.</p>
            <br><br><br><br><img src="imagenes/pro_rebasar.png">
            <p class="left-align"><br><b>Vuelta a la derecha prohibida: </b> Prohíbe la vuelta a la derecha ya sea por circulación contraria o condiciones del camino.</p>
            <br><br><br><br><img src="imagenes/pro_derecha.png"><br><br><br>
            

        <div class="service">
            <p><br><br><b><h1>Dimensiones restrictivas</h1></b></p>
            <p class="left-align"><br>En los carriles de velocidades altas suelen existir señalamientos de tránsito que restringen las dimensiones de los vehículos y advierten sobre la existencia de túneles, puentes o alguna particularidad en el camino que haga difícil, o hasta imposible, el tránsito de vehículos altos, anchos, pesados, demasiado livianos o lentos.</p>
            <p class="left-align"><br>El resultado de evadir estos señalamientos puede derivar en accidentes de tránsito, atascos y daño a la infraestructura.</p>
            <p class="left-align"><br><b>Prohibido rebasar: </b>La señal de tránsito prohíbe rebasar vehículos en un tramo del camino. Es complementada con la línea continua en el pavimento.</p>
            <br><br><br><br><img src="imagenes/pro_rebasar1.jpg"><br><br><br>
            <p class="left-align"><br><b>Velocidad máxima: </b> Este tipo de señal de tránsito indica el límite de velocidad máximo para circular.</p>
            <br><br><br><br><img src="imagenes/vel_max.jpg"><br><br><br>
            <p class="left-align"><br><b>Ceda el paso: </b> Esta señal es una advertencia para los conductores para reducir su velocidad y ceder el paso siempre que sea necesario. Es ocupada en zonas de basto tránsito de peatones y vehículos o en entronques con avenidas principales.</p>
            <br><br><br><br><img src="imagenes/ceda.jpg"><br><br><br>
            <p class="left-align"><br><b>Doble circulación: </b> Se utiliza para indicar cuando la circulación cambia de un sólo sentido a ambos. El señalamiento se coloca al inicio de la calle.</p>
            <br><br><br><br><img src="imagenes/doble_circulacion.jpg"><br><br><br>
        
        <div class="service">
            <p><br><br><b><h1>Señales preventivas</h1></b></p>
            <p class="left-align"><br>Son las señales de color amarillo con negro que tienen el objetivo de prevenir a los conductores sobre algún peligro o cambio en el camino. A continuación, te mostraremos algunos ejemplos:</p>
            <p class="left-align"><br>Las señales de prevención con flechas apuntan al estado del camino en cuanto a curvaturas, a la presencia de rotondas o a la existencia de una vía de doble circulación. Las que aquí observamos indican:</p>
            <p class="left-align"><br><b>• La advertencia de una curva peligrosa en la vía, conviene reducir la velocidad.</b></p>
            <p class="left-align"><br><b>• La llegada de una curva.</b></p>
            <p class="left-align"><br><b>• La existencia de una curva y enseguida una contracurva pronunciada, por lo que el conductor debe estar atento.</b></p>
            <p class="left-align"><br><b>• La existencia de una curva y enseguida una contracurva menor.</b></p>
            <p class="left-align"><br><b>• Un camino sinuoso, indica la presencia de constantes curvas por lo que conviene conducir con precaución.</b></p>
            <p class="left-align"><br><b>• Las dos fechas en sentidos invertidos indican que se pasa de una carretera con un sentido de circulación único, a la doble circulación.</b></p>
            <br><br><br><br><img src="imagenes/curvas.jpg"><br><br><br>
            <p class="left-align"><br>El tipo de señales de tránsito de prevención que observamos en esta imagen indican directamente las bifurcaciones o cruces que se presentan en la vía. Es muy importante prestar especial atención a ellas, pues representan un cambio importante en la carretera. Estas 6 imágenes indican:</p>
            <p class="left-align"><br><b>• Cruce de caminos, es necesario aumentar la prevención para evitar accidentes.</b></p>
            <p class="left-align"><br><b>• Una bifurcación en T señala que más adelante se incorpora una vía perpendicular.</b></p>
            <p class="left-align"><br><b>• La bifurcación en Y es una de las más vistas en las carreteras, es necesario prestar atención pues muchos conductores distraídos frenan de forma abrupta por no saber qué sentido tomar, lo que ocasiona muchos accidentes.</b></p>
            <p class="left-align"><br><b>• Un camino lateral indicará que por un lado de la vía se pueden incorporar nuevos vehículos, se recomienda prudencia.</b></p>
            <p class="left-align"><br><b>• El camino lateral es también es una señal de tráfico popular, indica una salida de la vía.</b></p>
            <p class="left-align"><br><b>• La última señal si bien no es tan común requiere de importante atención, pues de forma sucesiva se incorporarán coches por cada lado de la carretera, lo mejor es bajar la velocidad.</b></p>
            <br><br><br><br><img src="imagenes/caminos.jpg"><br><br><br>
            <p class="left-align"><br>En esta imagen nos encontramos con algunas de las señales de tránsito de prevención más populares, en especial las tres primeras. Sirven para indicar:</p>
            <p class="left-align"><br><b>• El fin de un camino dividido, algunos metros después de esta señal, la carretera pasará a ser de un solo sentido.</b></p>
            <p class="left-align"><br><b>• La flecha con un tramo señala que a la vía se incorporarán coches, es muy importante estar atentos para evitar accidentes.</b></p>
            <p class="left-align"><br><b>• Una rotonda próxima es siempre señal de precaución, sobre todo en cuanto a la prioridad de paso y la reducción de la velocidad.</b></p>
            <p class="left-align"><br><b>• La calzada estrecha es una advertencia para disminuir la velocidad y estar atentos al camino, pues la vía deja de tener la misma amplitud.</b></p>
            <p class="left-align"><br><b>• Un puente angosto amerita igualmente atención y velocidad moderada.</b></p>
            <p class="left-align"><br><b>• La señal de puente móvil sirve para que el conductor esté precavido de que, posiblemente, deba detenerse si en ese momento el puente sube.</b></p>
            <br><br><br><br><img src="imagenes/fin_del_camino.jpg"><br><br><br>
            <p class="left-align"><br>La presencia de túneles y cambios en la vía que sin la adecuada prevención pueden ocasionar accidentes, son las principales advertencias de este grupo de señales:</p>
            <p class="left-align"><br><b>• La depresión transversal amerita reducción de la velocidad para evitar golpe importante en la parte baja del coche.</b></p>
            <p class="left-align"><br><b>• Lo mismo ocurre con las elevaciones transversales, colocadas normalmente en calles en las que se requiere la reducción de la velocidad.</b></p>
            <p class="left-align"><br><b>• Un túnel apunta también a la disminución de la velocidad.</b></p>
            <p class="left-align"><br><b>• La calzada resbaladiza es una señal muy clara que debe ser tomada en cuenta reduciendo la velocidad, de lo contrario se pueden sufrir accidentes importantes.</b></p>
            <p class="left-align"><br><b>• Las vías ubicadas entre montañas o terrenos con deslizamientos suelen presentar la señal de zona de derrumbe, de esta forma el conductor se encuentra atento a cualquier incidente.</b></p>
            <p class="left-align"><br><b>• La pendiente peligrosa requiere también de moderar la velocidad y circular con atención.</b></p>
            <br><br><br><br><img src="imagenes/depresion.jpg"><br><br><br>
            <p class="left-align"><br>La presencia de hombres y animales en la vía se manifiesta a través de estas señales de tráfico de prevención que resulta importante tomar en cuenta, con el fin de evitar accidentes mayores en los que pueda haber heridos.</p>
            <p class="left-align"><br><b>• Las cuatro primeras señales indican que en la vía existen obreros, niños o peatones, ya sea por reparaciones, o por la cercanía de una zona de juego, de una zona escolar o de un cruce peatonal. Son vías con restricciones de velocidad, por lo que es fundamental respetarlas por nuestra seguridad y la de los otros.</b></p>
            <p class="left-align"><br><b>• Las dos últimas señales por su parte apuntan a la presencia de animales, debido normalmente a que circulamos cerca de un campo, granja o parque natural. Es importante estar atento para evitar accidentes.</b></p>
            <br><br><br><br><img src="imagenes/zonas.jpg"><br><br><br>
            <p class="left-align"><br>El último grupo de señales de tránsito de prevención nos indican condiciones puntuales en ese tramo de vía, como, por ejemplo:</p>
            <p class="left-align"><br><b>• Ancho y altura limitada, es una advertencia muy frecuente cuando transitamos por debajo de un puente o vía elevada, o dentro de un sótano. Resulta fundamental para quienes conducen camiones y camionetas.</b></p>
            <p class="left-align"><br><b>• El paso de maquinaria agrícola puede indicar la interrupción de la vía en cualquier momento, mientras que los vuelos bajos son una señal para que el conductor no se alarme si ve aproximarse un avión a una altura muy cercana al suelo.</b></p>
            <p class="left-align"><br><b>• La proximidad de un semáforo llama reducir la velocidad, lo mismo que el paso a nivel que puede indicar que la vía se corta para permitir el tránsito de un tren.</b></p>
            <br><br><br><br><img src="imagenes/ancho_limitado.jpg"><br><br><br>
                
        </div>         
    </main>
    
    <footer>

    </footer>  
</body>
</html>