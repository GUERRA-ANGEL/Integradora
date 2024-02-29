<?php
// Incluir archivo de conexión a la base de datos
include 'conexion_be.php';

// Procesar el formulario de aprobación o desaprobación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado el formulario de aprobación
    if (isset($_POST["aprobar"])) {
        // Validar y obtener el ID del candidato
        if (isset($_POST["ID_candidato"]) && is_numeric($_POST["ID_candidato"])) {
            $ID_candidato = $_POST["ID_candidato"];

            // Actualizar el campo 'aprobada' a 1 (aprobada) para permitir el acceso
            $consulta = "UPDATE candidatos SET aprobada = 1 WHERE ID_candidato = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param("i", $ID_candidato);
            $stmt->execute();

            // Redirigir a la página de administración o mostrar un mensaje de éxito
            header("Location: pag_admin.php");
            exit();
        } else {
            // Manejo de error si el ID_candidato no es válido
            echo "Error: ID de candidato no válido.";
        }
    }

    // Verificar si se ha enviado el formulario de desaprobación
    if (isset($_POST["desaprobar"])) {
        // Validar y obtener el ID del candidato
        if (isset($_POST["ID_candidato"]) && is_numeric($_POST["ID_candidato"])) {
            $ID_candidato = $_POST["ID_candidato"];

            // Eliminar primero las filas relacionadas en la tabla documentos
            $consulta = "DELETE FROM documentos WHERE ID_candidato = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param("i", $ID_candidato);
            $stmt->execute();

            // Luego, eliminar la cuenta de la base de datos
            $consulta = "DELETE FROM candidatos WHERE ID_candidato = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param("i", $ID_candidato);
            $stmt->execute();

            // Redirigir a la página de administración o mostrar un mensaje de éxito
            header("Location: pag_admin.php");
            exit();
        } else {
            // Manejo de error si el ID_candidato no es válido
            echo "Error: ID de candidato no válido.";
        }
    }
}

// Obtener la lista de candidatos pendientes de aprobación
$consulta_pendientes = "SELECT * FROM candidatos WHERE aprobada = 0";
$resultado_pendientes = $conexion->query($consulta_pendientes);
?>