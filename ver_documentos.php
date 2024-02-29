<?php
include 'conexion_be.php';

if (isset($_GET['candidato_id']) && isset($_GET['documento'])) {
    $candidato_id = $_GET['candidato_id'];
    $documento = $_GET['documento'];

    // Construir la ruta completa al documento
    $ruta_completa = "Este equipo/C:/xampp/htdocs/integradora/Comprobantes/$documento"; // Cambia la ruta según tu configuración

    if (file_exists($ruta_completa)) {
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=$documento");
        readfile($ruta_completa);
    } else {
        echo "Documento no encontrado.";
    }
} else {
    echo "Parámetros no proporcionados.";
}
?>

