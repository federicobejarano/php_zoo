<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico</title>
</head>
<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo-container">
                <h1>Zoológico</h1>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="input-area">
            <!-- Formulario para introducir el nombre del delfín -->
            <form method="post" action="">
                <input type="text" name="nombre_delfin" placeholder="Nombre del delfín">
                <input type="submit" value="Crear">
            </form>
        </div>

        <div class="display-area">
            <ul>
                <?php
                $nombres_delfines = [];

                // Comprobación si se ha enviado el formulario
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Obtención del nombre del delfín
                    $nombre = trim($_POST['nombre_delfin']);

                    // Verificación si el nombre no está vacío
                    if (!empty($nombre)) {
                        $nombres_delfines[] = $nombre;
                    }
                }

                // Mostrar cada nombre de delfín como un item de la lista
                foreach ($nombres_delfines as $nombre) {
                    echo "<li>" . htmlspecialchars($nombre) . "</li>";
                }
                ?>
            </ul>
        </div>
    </div>
    
</body>
</html>