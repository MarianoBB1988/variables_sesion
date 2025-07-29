<?php
// Iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Variables de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .sesion-info {
            background-color: #e7f3ff;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .no-sesion {
            background-color: #f8d7da;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            color: #721c24;
        }
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;
        }
        .boton:hover {
            background-color: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 3px;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Variables de Sesión Activas</h1>
        
        <?php if (!empty($_SESSION)): ?>
            <div class="sesion-info">
                <h2>Variables encontradas:</h2>
                <ul>
                    <?php foreach ($_SESSION as $clave => $valor): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($clave); ?>:</strong> 
                            <?php echo htmlspecialchars($valor); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <p><strong>Total de variables:</strong> <?php echo count($_SESSION); ?></p>
                <p><strong>ID de sesión:</strong> <?php echo session_id(); ?></p>
            </div>
        <?php else: ?>
            <div class="no-sesion">
                <h2>No hay variables de sesión</h2>
                <p>Aún no se han creado variables de sesión. Puedes crear algunas llenando el formulario.</p>
            </div>
        <?php endif; ?>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="formulario.html" class="boton">Ir al Formulario</a>
            <a href="procesar.php" class="boton">Ver Procesador</a>
            <a href="destruir_sesion.php" class="boton" style="background-color: #f44336;">Destruir Sesión</a>
        </div>
    </div>
</body>
</html>
