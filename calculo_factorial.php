<!-- calculo_factorial.php -->
<?php
// Definir el rango mínimo y máximo.
$min = intval($_GET['min']); 
$max = intval($_GET['max']);
// primer for: recorrer el rango de números del mínimo al máximo.
for ($i = $min; $i <= $max; $i++) {
    $factorial = 1;

    // Segundo for: calcular el factorial del número $i.
    for ($j = 1; $j <= $i; $j++) {
        $factorial *=$j;
    
    }
     // Mostrar el número y su factorial en una fila de la tabla.
    echo "<tr><td>$i</td><td>$factorial</td></tr>";
}
?>