# Variables de Sesión en PHP - Ejemplo Educativo

Este proyecto contiene ejemplos simples para aprender a usar **variables de sesión** en PHP.

## 📋 ¿Qué son las Variables de Sesión?

Las variables de sesión permiten **guardar información del usuario** que se mantiene disponible mientras navega por diferentes páginas del sitio web. Esta información se almacena en el servidor y se identifica con un ID único de sesión.

## 🗂️ Archivos del Proyecto

| Archivo | Descripción |
|---------|-------------|
| `formulario.html` | Formulario HTML simple para capturar datos del usuario |
| `procesar.php` | Procesa el formulario y guarda los datos en variables de sesión |
| `ver_sesion.php` | Muestra todas las variables de sesión activas |
| `destruir_sesion.php` | Elimina todas las variables de sesión |

## 🚀 Cómo usar el proyecto

### 1. Requisitos
- XAMPP, WAMP o cualquier servidor con PHP
- Navegador web

### 2. Instalación
1. Copia la carpeta `variables_sesion` a tu directorio web (ej: `htdocs` en XAMPP)
2. Inicia tu servidor web
3. Ve a: `http://localhost/variables_sesion/formulario.html`

### 3. Flujo de uso
1. **Llena el formulario** en `formulario.html`
2. **Envía los datos** (se procesarán en `procesar.php`)
3. **Ve las variables** guardadas en `ver_sesion.php`
4. **Destruye la sesión** cuando termines con `destruir_sesion.php`

## 💡 Conceptos Importantes

### `session_start()`
```php
session_start(); // SIEMPRE debe ir al principio del archivo PHP
```
- Inicia o reanuda una sesión existente
- Debe llamarse antes de usar `$_SESSION`
- Debe ir antes de cualquier salida HTML

### `$_SESSION`
```php
$_SESSION['nombre'] = 'Juan';     // Guardar datos
echo $_SESSION['nombre'];         // Mostrar datos
unset($_SESSION['nombre']);       // Eliminar una variable
```
- Array superglobal para almacenar datos de sesión
- Los datos persisten entre páginas
- Solo están disponibles para el usuario actual

### `session_destroy()`
```php
session_destroy(); // Elimina TODAS las variables de sesión
```
- Destruye completamente la sesión
- Útil para "cerrar sesión"
- Después de esto, `$_SESSION` estará vacío

## 📖 Ejemplo Paso a Paso

### 1. Formulario HTML (`formulario.html`)
```html
<form action="procesar.php" method="POST">
    <input type="text" name="nombre" required>
    <input type="email" name="email" required>
    <input type="text" name="edad" required>
    <button type="submit">Enviar</button>
</form>
```

### 2. Procesamiento PHP (`procesar.php`)
```php
<?php
session_start(); // ¡Importante! Siempre primero

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar datos del formulario en la sesión
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['fecha_registro'] = date('Y-m-d H:i:s');
}

// Mostrar los datos guardados
echo "Hola " . $_SESSION['nombre'];
?>
```

## 🔍 Funciones Útiles

| Función | Descripción | Ejemplo |
|---------|-------------|---------|
| `session_start()` | Inicia la sesión | `session_start();` |
| `session_id()` | Obtiene el ID de sesión | `echo session_id();` |
| `session_destroy()` | Destruye la sesión | `session_destroy();` |
| `isset()` | Verifica si existe una variable | `if(isset($_SESSION['nombre']))` |
| `unset()` | Elimina una variable específica | `unset($_SESSION['nombre']);` |

## ⚠️ Errores Comunes

### ❌ Error: "Headers already sent"
```php
<html>  <!-- ¡MAL! HTML antes de session_start() -->
<?php session_start(); ?>
```

### ✅ Forma correcta:
```php
<?php 
session_start(); // ¡BIEN! session_start() primero
?>
<html>
```

### ❌ Olvidar session_start()
```php
$_SESSION['nombre'] = 'Juan'; // ¡Error! No hay session_start()
```

### ✅ Forma correcta:
```php
<?php
session_start();              // ¡BIEN! Primero iniciar sesión
$_SESSION['nombre'] = 'Juan';  // Ahora sí funciona
?>
```

## 🎯 Ejercicios para Practicar

1. **Básico**: Modifica el formulario para agregar un campo "ciudad"
2. **Intermedio**: Crea un contador de visitas que se incremente cada vez que el usuario recarga la página
3. **Avanzado**: Implementa un sistema de login simple con usuario y contraseña

## 🔗 Enlaces Útiles

- [Documentación oficial de PHP - Sesiones](https://www.php.net/manual/es/book.session.php)
- [Tutorial W3Schools - PHP Sessions](https://www.w3schools.com/php/php_sessions.asp)

## 👨‍🏫 Para el Profesor

Este ejemplo está diseñado para:
- Mostrar conceptos básicos de sesiones
- Evitar complejidad innecesaria
- Permitir experimentación segura
- Facilitar la comprensión paso a paso

---
**Autor**: Profesor [Tu Nombre]  
**Curso**: Programación Web con PHP  
**Fecha**: Julio 2025
