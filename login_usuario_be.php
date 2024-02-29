<?php
// Iniciar sesión
session_start();

// Incluir archivo de conexión a la base de datos
include 'conexion_be.php';

// Obtener los datos enviados por el formulario de inicio de sesión
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$contra = hash('sha512', $contra);

// Validar el inicio de sesión consultando la base de datos
$consulta_login_candidato = "SELECT ID_candidato AS ID, 'candidato' AS tipo, aprobada FROM candidatos WHERE correo='$correo' AND contra='$contra'";
$consulta_login_admin = "SELECT ID_admin AS ID, 'admin' AS tipo, role FROM administradores WHERE correo='$correo' AND contra='$contra' AND role='admin'";

$validar_login_candidato = mysqli_query($conexion, $consulta_login_candidato);
$validar_login_admin = mysqli_query($conexion, $consulta_login_admin);

$num_rows_candidato = mysqli_num_rows($validar_login_candidato);
$num_rows_admin = mysqli_num_rows($validar_login_admin);

if ($num_rows_candidato > 0 && $num_rows_admin > 0) {
    // Si se encontraron resultados válidos tanto para candidato como para administrador
    // Esto parece ser un caso poco común o un error en la base de datos, podrías manejarlo según tus necesidades
    // Por ejemplo, podrías mostrar un mensaje de error o realizar otras acciones
} elseif ($num_rows_candidato > 0) {
    // Si se encontraron resultados válidos para candidato solamente
    $datos_candidato = mysqli_fetch_assoc($validar_login_candidato);

    if ($datos_candidato['aprobada'] == 1) {
        $_SESSION['usuario'] = $correo;
        header("Location: pag-principal.php");
        exit;
    } else {
        echo '
            <script>
                alert("Tu cuenta aún no ha sido aprobada. Espera a que el administrador la valide.");
                window.location = "index.php";
            </script>
        ';
        exit;
    }
} elseif ($num_rows_admin > 0) {
    // Si se encontraron resultados válidos para administrador solamente
    $datos_admin = mysqli_fetch_assoc($validar_login_admin);
    $_SESSION['usuario'] = $correo; // Establecer la sesión para el administrador
    header("Location: pag_admin.php");
    exit;
} else {
    // No se encontraron resultados válidos
    echo '
        <script>
            alert("Usuario no encontrado, intente de nuevo por favor");
            window.location = "index.php";
        </script>
    ';
    exit;
}
?>
