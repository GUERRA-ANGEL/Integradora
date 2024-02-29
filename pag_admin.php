<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
} else {
    // Verificar si el usuario tiene rol de administrador
    if (isset($_SESSION['tipo']) && $_SESSION['tipo'] === 'admin') {
        // El usuario es un administrador, permitir el acceso a la página de administrador
        header("Location: pag_admin.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Página de Administración</title>
    <style>
        body {
    background-color: black;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    justify-content: center;
    min-height: 100hv;
    }
    body {
      background-image: url(imagenes/Fondo.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

     /* Estilos para las tablas */
     table {
            background-color: white; /* Color azul fuerte */
            color: white;
            border-radius: 10px; /* Borde redondo */
        }

        /* Estilos para los botones en la tabla */
        .table .btn-primary {
            background-color: #66B3FF; /* Color azul claro */
            border-color: #66B3FF;
            border-radius: 5px; /* Borde redondo */
        }

        /* Estilos para los botones en el formulario */
        .btn-primary {
            background-color: #007BFF; /* Color azul fuerte */
            border-color: #007BFF;
            border-radius: 5px; /* Borde redondo */
        }

        /* Cambiar el color del fondo del menú */
        .navbar {
            background-color: #007BFF; /* Color azul fuerte */
        }

        /* Cambiar el color del enlace del menú */
        .navbar-light .navbar-nav .nav-link {
            color: black;
        }

        /* Cambiar el color del enlace del menú al pasar el mouse */
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(95, 156, 255, 0.75);
        }

        .nav-item {
            color: black;
        }

        .nav-link.logout {
            color: black;
        }

        h2 {
            color: white;
        }

        
        p {
            color: white;
        }

        .text{
            color: white;
        }
    </style>
</head>
<body>

<?php
include 'pendientes.php';
include 'aprobar_desaprobar_cuenta.php';
include 'conexion_be.php';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">Micro-Info</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="cerrar_sesion.php" class="nav-link">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Candidatos Pendientes de Aprobación:</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($candidato = $resultado_pendientes->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $candidato['nombre']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Formulario para Aprobar/Desaprobar Cuentas:</h2>
            <form method="post" action="aprobar_desaprobar_cuenta.php">
                <div class="form-group">
                    <label for="ID_candidato" class="text">Selecciona el candidato:</label>
                    <select name="ID_candidato" class="form-control" required>
                        <?php
                        $resultado_pendientes->data_seek(0);
                        while ($candidato = $resultado_pendientes->fetch_assoc()):
                        ?>
                            <option value="<?php echo $candidato['ID_candidato']; ?>"><?php echo $candidato['nombre']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" name="aprobar" class="btn btn-success">Aprobar cuenta</button>
                <button type="submit" name="desaprobar" class="btn btn-danger">Desaprobar cuenta</button>
            </form>
        </div>
    </div>

    <div class="container mt-5">
    <h2>Visualizador de Documentos</h2>

    <?php
    $sql = "SELECT c.ID_candidato, c.nombre, c.primer_apellido, c.segundo_apellido
            FROM candidatos c
            WHERE c.aprobada = 0";

    $result = $conexion->query($sql);

    while ($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $primer_apellido = $row["primer_apellido"];
        $segundo_apellido = $row["segundo_apellido"];

        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Primer Apellido: " . $primer_apellido . "</p>";
        echo "<p>Segundo Apellido: " . $segundo_apellido . "</p>";

        // Generar nombres de archivos usando los datos del candidato y la extensión ".pdf"
        $comprobante_domicilio_nombre_final = $nombre . "_" . $primer_apellido . "_" . $segundo_apellido . ".pdf";
        $cartas_recomendacion_nombre_final = $nombre . "_" . $primer_apellido . "_" . $segundo_apellido . ".pdf";
        $ine_nombre_final = $nombre . "_" . $primer_apellido . "_" . $segundo_apellido . ".pdf";
        $curp_nombre_final = $nombre . "_" . $primer_apellido . "_" . $segundo_apellido . ".pdf";
        $licencia_nombre_final = $nombre . "_" . $primer_apellido . "_" . $segundo_apellido . ".pdf";

        // Directorios donde se almacenan los archivos
        $directorio_comprobantes = "Comprobantes/";
        $directorio_cartas = "Cartas de recomendacion/";
        $directorio_ine = "INE/";
        $directorio_curp = "CURP/";
        $directorio_licencia = "Licencias/";

        // Mostrar enlaces a los documentos que coinciden con los nombres generados
        echo '<a href="' . $directorio_comprobantes . $comprobante_domicilio_nombre_final . '" class="btn btn-primary" target="_blank">Comprobante de Domicilio</a><br>';
        echo '<a href="' . $directorio_cartas . $cartas_recomendacion_nombre_final . '" class="btn btn-primary" target="_blank">Cartas de Recomendación</a><br>';
        echo '<a href="' . $directorio_ine . $ine_nombre_final . '" class="btn btn-primary" target="_blank">INE</a><br>';
        echo '<a href="' . $directorio_curp . $curp_nombre_final . '" class="btn btn-primary" target="_blank">CURP</a><br>';
        echo '<a href="' . $directorio_licencia . $licencia_nombre_final . '" class="btn btn-primary" target="_blank">Licencia</a><br>';
    }

    ?>
</div><br><br>

    <h2>Candidatos Autorizados:</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Edad</th>
                <th>Número de Teléfono</th>
                <th>Correo Electrónico</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta_candidatos_autorizados = "SELECT * FROM candidatos WHERE aprobada = '1'";
            $resultado_candidatos_autorizados = $conexion->query($consulta_candidatos_autorizados);

            while ($candidato = $resultado_candidatos_autorizados->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $candidato['nombre']; ?></td>
                <td><?php echo $candidato['primer_apellido']; ?></td>
                <td><?php echo $candidato['segundo_apellido']; ?></td>
                <td><?php echo $candidato['edad']; ?></td>
                <td><?php echo $candidato['telefono']; ?></td>
                <td><?php echo $candidato['correo']; ?></td>
                <td><?php echo $candidato['role']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table><br><br>

    <h2>Progreso de los Candidatos:</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Candidato</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fecha y Hora</th>
                <th>Módulos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta_candidatos_registros = "
                SELECT c.ID_candidato, c.nombre, c.primer_apellido, c.segundo_apellido, r.fecha_hora, r.nombre_boton
                FROM candidatos c
                JOIN registros r ON c.ID_candidato = r.ID_candidato
                WHERE c.aprobada = '1'
            ";
            $resultado_candidatos_registros = $conexion->query($consulta_candidatos_registros);

            while ($fila = $resultado_candidatos_registros->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $fila['ID_candidato']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['primer_apellido']; ?></td>
                <td><?php echo $fila['segundo_apellido']; ?></td>
                <td><?php echo $fila['fecha_hora']; ?></td>
                <td><?php echo $fila['nombre_boton']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <h2>Calificaciones de los Candidatos:</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Candidato</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Nombre Evaluación</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta_calificaciones = "
                SELECT c.ID_candidato, c.nombre, c.primer_apellido, c.segundo_apellido, cal.nombre_evaluacion, cal.calificacion
                FROM candidatos c
                JOIN calificaciones cal ON c.ID_candidato = cal.ID_candidato
            ";
            $resultado_calificaciones = $conexion->query($consulta_calificaciones);

            while ($fila = $resultado_calificaciones->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $fila['ID_candidato']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['primer_apellido']; ?></td>
                <td><?php echo $fila['segundo_apellido']; ?></td>
                <td><?php echo $fila['nombre_evaluacion']; ?></td>
                <td><?php echo $fila['calificacion']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php
    $cantidad_candidatos = $resultado_candidatos_autorizados->num_rows;
    echo "<p>Total de candidatos registrados: " . $cantidad_candidatos . "</p>";

?>
</div>

<div class="container mt-5">
    <h2>Tabla de Evaluación de Candidatos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Calificación Evaluación 1</th>
                <th>Calificación Evaluación 2</th>
                <!-- Agregar más columnas para más evaluaciones si es necesario -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta para obtener los candidatos y sus calificaciones
            $consulta_calificaciones = "
                SELECT c.nombre, c.primer_apellido, c.segundo_apellido, cal.nombre_evaluacion, cal.calificacion
                FROM candidatos c
                JOIN calificaciones cal ON c.ID_candidato = cal.ID_candidato
                ORDER BY c.nombre, c.primer_apellido, c.segundo_apellido
            ";
            $resultado_calificaciones = $conexion->query($consulta_calificaciones);

            // Array para almacenar las calificaciones de cada candidato
            $calificaciones_candidatos = array();

            // Procesar resultados y almacenar calificaciones por candidato
            while ($fila = $resultado_calificaciones->fetch_assoc()) {
                $nombre = $fila['nombre'];
                $primer_apellido = $fila['primer_apellido'];
                $segundo_apellido = $fila['segundo_apellido'];
                $nombre_evaluacion = $fila['nombre_evaluacion'];
                $calificacion = $fila['calificacion'];

                // Almacenar calificaciones en un array asociativo usando el nombre como clave
                $calificaciones_candidatos[$nombre][] = array('nombre' => $nombre, 'primer_apellido' => $primer_apellido, 'segundo_apellido' => $segundo_apellido, 'calificacion' => $calificacion);
            }

            // Iterar sobre los candidatos y mostrar sus calificaciones en la tabla
            foreach ($calificaciones_candidatos as $candidato) {
                $nombre = $candidato[0]['nombre'];
                $primer_apellido = $candidato[0]['primer_apellido'];
                $segundo_apellido = $candidato[0]['segundo_apellido'];

                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$primer_apellido</td>";
                echo "<td>$segundo_apellido</td>";

                // Mostrar las calificaciones de cada evaluación
                foreach ($candidato as $evaluacion) {
                    echo "<td>" . $evaluacion['calificacion'] . "</td>";
                }

                // Verificar si todas las calificaciones son mayores a 8 para aprobar la capacitación
                $aprobado = true;
                foreach ($candidato as $evaluacion) {
                    if ($evaluacion['calificacion'] < 8) {
                        $aprobado = false;
                        break;
                    }
                }

                // Mostrar el botón de aprobar capacitación si todas las calificaciones son mayores a 8
                if ($aprobado) {
                    echo '<td><button class="btn btn-success">Aprobar Capacitación</button></td>';
                } else {
                    echo '<td>No Aprobar</td>';
                }

                echo "</tr>";
            }

            $conexion->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
