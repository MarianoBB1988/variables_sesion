<?php
// Iniciar la sesión - SIEMPRE debe ir al principio
session_start();

// Verificar si se enviaron datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar los datos del formulario en variables de sesión
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['fecha_registro'] = date('Y-m-d H:i:s');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando - Variables de Sesión</title>
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
        .datos {
            background-color: #d4edda;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .codigo {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 20px 0;
        }
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 10px 5px;
        }
        .boton:hover {
            background-color: #45a049;
        }
        .boton-rojo {
            background-color: #f44336;
        }
        .boton-rojo:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Datos Guardados en Sesión!</h1>
        
        <?php if (isset($_SESSION['nombre'])): ?>
            <div class="datos">
                <h2>Información guardada:</h2>
                <ul>
                    <li><strong>Nombre:</strong> <?php echo $_SESSION['nombre']; ?></li>
                    <li><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
                    <li><strong>Edad:</strong> <?php echo $_SESSION['edad']; ?> años</li>
                    <li><strong>Fecha de registro:</strong> <?php echo $_SESSION['fecha_registro']; ?></li>
                </ul>
                <p><strong>ID de sesión:</strong> <?php echo session_id(); ?></p>
            </div>
            
            <div class="codigo">
                <h3>Código PHP utilizado:</h3>
                <pre>
// Iniciar sesión
session_start();

// Guardar datos en variables de sesión
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['edad'] = $_POST['edad'];

// Mostrar datos
echo $_SESSION['nombre'];
                </pre>
            </div>
            
        <?php else: ?>
            <p>No hay datos de sesión. <a href="formulario.html">Vuelve al formulario</a></p>
        <?php endif; ?>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="formulario.html" class="boton">Nuevo Registro</a>
            <a href="ver_sesion.php" class="boton">Ver Todas las Variables</a>
            <a href="destruir_sesion.php" class="boton boton-rojo">Destruir Sesión</a>
        </div>
        
        <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <h3>¿Qué aprendimos?</h3>
            <ul>
                <li><strong>session_start():</strong> Inicia o reanuda una sesión</li>
                <li><strong>$_SESSION:</strong> Array donde guardamos nuestros datos</li>
                <li><strong>$_POST:</strong> Datos que vienen del formulario</li>
                <li>Los datos de sesión persisten entre páginas</li>
            </ul>
        </div>
    </div>
</body>
</html>
