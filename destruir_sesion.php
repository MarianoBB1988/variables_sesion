<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión Destruida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .mensaje {
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 10px;
        }
        .boton:hover {
            background-color: #45a049;
        }
        .codigo {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            text-align: left;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Sesión Destruida!</h1>
        
        <div class="mensaje">
            <h2>✓ Todas las variables de sesión han sido eliminadas</h2>
            <p>La función <strong>session_destroy()</strong> ha eliminado todos los datos de la sesión actual.</p>
        </div>
        
        <div class="codigo">
            <h3>Código utilizado:</h3>
            <pre>
// Iniciar sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();
            </pre>
        </div>
        
        <div style="margin-top: 30px;">
            <a href="formulario.html" class="boton">Crear Nueva Sesión</a>
            <a href="ver_sesion.php" class="boton">Verificar Sesión</a>
        </div>
        
        <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px; text-align: left;">
            <h3>¿Qué hace session_destroy()?</h3>
            <ul>
                <li>Elimina todas las variables de $_SESSION</li>
                <li>Destruye la sesión del servidor</li>
                <li>El usuario necesitará crear una nueva sesión</li>
                <li>Es útil para "cerrar sesión" o limpiar datos</li>
            </ul>
        </div>
    </div>
</body>
</html>
