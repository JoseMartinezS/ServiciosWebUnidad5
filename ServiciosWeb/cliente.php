<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio Web - Cliente</title>
    <!-- Aquí puedes agregar estilos CSS si lo deseas -->
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            text-align: center;
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
        <h1>Cliente del Servicio Web</h1>
        <p>Presiona el botón para obtener la respuesta del servicio:</p>
        <button onclick="llamarServicio()">Obtener Saludo</button>
        <div class="response" id="respuesta"></div>
    </div>

    <!-- Script JavaScript para manejar la llamada al servicio -->
    <script>
        function llamarServicio() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("respuesta").innerHTML = "<p>Respuesta del servicio: " + this.responseText + "</p>";
                } else if (this.readyState == 4 && this.status != 200) {
                    document.getElementById("respuesta").innerHTML = "<p>Error al obtener la respuesta del servicio.</p>";
                }
            };
            xhttp.open("GET", "http://localhost/web/ServiciosWeb/servidor.php?nombre=Jose%20De%20Jesus%20Martinez%20Silva", true);
            xhttp.send();
        }
    </script>
</body>
</html>
