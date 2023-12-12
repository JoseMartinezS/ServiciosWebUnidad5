<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio Web - Servidor</title>
    <!-- Estilos CSS (puedes personalizarlos según tu preferencia) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .response {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Servicio Web - Resultado</h1>
        <div class="response">
            <p>
                <?php
                // Copia y pega tu código PHP aquí
                function obtenerSaludo($nombre) {
                    return "Hola, $nombre";
                }

                if (isset($_GET['nombre'])) {
                    $nombre = $_GET['nombre'];
                    echo obtenerSaludo($nombre);
                } else {
                    echo "Por favor, proporcione un nombre.";
                }
                ?>
            </p>
        </div>
    </div>
</body>
</html>
