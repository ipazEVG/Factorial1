<!DOCTYPE html> 
<head>
    <meta charset="UTF-8"> 
    <title>Tabla de Factoriales</title> <!-- Título de la pestaña del navegador -->
    <link rel="stylesheet" href="css_tabla_factorial.css"> <!-- Enlaza la hoja de estilos CSS para dar formato a la tabla -->
</head>
<body>

<?php
// Definir el rango mínimo y máximo de forma dinámica
$min = intval($_GET['min']); // Obtiene el valor mínimo del rango desde la URL y lo convierte a un entero
$max = intval($_GET['max']); // Obtiene el valor máximo del rango desde la URL y lo convierte a un entero

// Mostrar el encabezado de la tabla con el rango de factoriales
echo "<h2><u>TABLA DE FACTORIALES DEL $min AL $max</u></h2>"; // Muestra un encabezado con subrayado
echo "<table>"; // Comienza la tabla HTML

// Define el encabezado de la tabla
echo
"<thead>
    <tr>
     <th>NÚMERO</th> <!-- Columna para los números -->
     <th>FACTORIAL</th> <!-- Columna para los factoriales -->
    </tr>
</thead>";

// Incluir el archivo que tiene los bucles anidados
include 'calculo_factorial.php'; // Incluye un archivo PHP que calcula los factoriales (se espera que esté definido en este archivo)
echo '<tr><td colspan="2">Ismael Paz Bernal</td></tr>'; // Agrega una fila al final de la tabla con el nombre del alumno
echo "</tbody></table>"; // Cierra el cuerpo y la tabla

?>

</body>
</html>