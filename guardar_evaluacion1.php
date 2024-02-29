<?php
session_start(); // Iniciar la sesión (necesario para usar $_SESSION)

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    include 'conexion_be.php';

    // Obtener el ID del candidato que inició sesión
    $correo_usuario = $_SESSION['usuario']; // Ajusta la clave de la sesión según tu implementación
    $sql_candidato_id = "SELECT ID_candidato FROM candidatos WHERE correo = ?";
    $stmt_candidato_id = mysqli_prepare($conexion, $sql_candidato_id);
    mysqli_stmt_bind_param($stmt_candidato_id, "s", $correo_usuario);
    mysqli_stmt_execute($stmt_candidato_id);
    mysqli_stmt_bind_result($stmt_candidato_id, $candidato_id);
    mysqli_stmt_fetch($stmt_candidato_id);
    mysqli_stmt_close($stmt_candidato_id);

    // Verificar si el usuario ya ha completado la encuesta
    $id_candidato = $candidato_id;
    $consulta_verificar_encuesta = "SELECT calificacion FROM calificaciones WHERE ID_candidato = ?";
    $stmt_verificar_encuesta = $conexion->prepare($consulta_verificar_encuesta);
    $stmt_verificar_encuesta->bind_param("i", $id_candidato);
    $stmt_verificar_encuesta->execute();
    $resultado_verificar_encuesta = $stmt_verificar_encuesta->get_result();
    
    if ($resultado_verificar_encuesta->num_rows > 0) {
        echo '
        <script>
            alert("Ya has completado la encuesta previamente.");
            window.location = "pag-principal.php";
        </script>
        ';
    } else {
       if (isset($_POST['respuesta1']) && isset($_POST['respuesta2']) && isset($_POST['respuesta3']) && isset($_POST['respuesta4']) && isset($_POST['respuesta5']) && isset($_POST['respuesta6']) && isset($_POST['respuesta7']) && isset($_POST['respuesta8']) && isset($_POST['respuesta9']) && isset($_POST['respuesta10']) && isset($_POST['respuesta11']) && isset($_POST['respuesta12']) && isset($_POST['respuesta13']) && isset($_POST['respuesta14']) && isset($_POST['respuesta15'])) {

        // Obtener el ID del candidato desde la consulta anterior
        $id_candidato = $candidato_id;

        // Nombre de la evaluación
        $nombre_evaluacion = "Evaluación de conocimientos de señales viales";

        // Respuestas del usuario desde el formulario
        $respuestas = array(
            $_POST['respuesta1'],
            $_POST['respuesta2'],
            $_POST['respuesta3'],
            $_POST['respuesta4'],
            $_POST['respuesta5'],
            $_POST['respuesta6'],
            $_POST['respuesta7'],
            $_POST['respuesta8'],
            $_POST['respuesta9'],
            $_POST['respuesta10'],
            $_POST['respuesta11'],
            $_POST['respuesta12'],
            $_POST['respuesta13'],
            $_POST['respuesta14'],
            $_POST['respuesta15']
        );

        // Respuestas correctas (ajusta según tus respuestas)
        $respuestas_correctas = array(
            "Regular la circulación vial",
            "Marcas en el pavimento y estructuras",
            "Orientar a los conductores y peatones",
            "Blanco",
            "Líneas transversales",
            "Para demarcar carriles y calzadas",
            "Prohibición de adelantar a otros vehículos",
            "Separación de carriles en el mismo sentido",
            "Marcar el lugar donde deben cruzar los peatones",
            "Paso de cebra",
            "Ayudan a orientar a los conductores y peatones",
            "Multas para los conductores",
            "Para garantizar la seguridad vial y evitar infracciones",
            "Marcar el lugar donde los vehículos deben detenerse",
            "En diversas vías, incluyendo carriles confinados para transporte público"
        );

        // Calcular la calificación
        $calificacion = 0;
        $total_preguntas = count($respuestas_correctas);

        foreach ($respuestas as $index => $respuesta_usuario) {
            if ($respuesta_usuario == $respuestas_correctas[$index]) {
                $calificacion++;
            }
        }

        $calificacion_decimal = ($calificacion / $total_preguntas) * 10;

        $consulta_insertar_calificacion = "INSERT INTO calificaciones (ID_candidato, nombre_evaluacion, calificacion) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($consulta_insertar_calificacion);
        $stmt->bind_param("iss", $id_candidato, $nombre_evaluacion, $calificacion_decimal);
        $resultado_insertar_calificacion = $stmt->execute();

        if ($resultado_insertar_calificacion) {
            if ($conexion->affected_rows > 0) {
                echo '
                <script>
                    alert("Evaluación enviada exitosamente.");
                    window.location = "pag-principal.php";
                </script>
                ';
            } else {
                echo "No se insertó ninguna calificación.";
            }
        } else {
            echo "Error al insertar la calificación: " . $stmt->error;
        }

 
        $stmt->close();
        $conexion->close();

    } else {
        echo "Error: Faltan datos del formulario.";
    }
}
} else {
header("Location: pag-principal.php");
exit;
}
?>
