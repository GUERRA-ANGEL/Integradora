<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carga de Documentos PDF</title>
</head>
<body>

<h1>Carga de Documentos PDF</h1>

<form method="post" enctype="multipart/form-data" action="upload.php">
    <label for="nombre_candidato">Nombre del Candidato:</label>
    <input type="text" name="nombre_candidato" required>
    <br><br>
    <label for="pdf_file">Selecciona un archivo PDF:</label>
    <input type="file" name="pdf_file" accept=".pdf" required>
    <br><br>
    <input type="submit" value="Cargar PDF">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_candidato = $_POST["nombre_candidato"];
    $target_dir = "pdf_uploads/";
    $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);

    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
        echo "<p>El archivo " . basename($_FILES["pdf_file"]["name"]) . " se cargó correctamente para el candidato: " . $nombre_candidato . ".</p>";
    } else {
        echo "<p>Error al cargar el archivo.</p>";
    }
}
?>

</body>
</html>
