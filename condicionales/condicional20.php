<html>
<head></head>
<body>
<?php
$mes = rand(1, 12);
echo "Mes: $mes<br>";
if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
    echo "Días: 31 días";
} elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
    echo "Días: 30 días";
} elseif ($mes == 2) {
    $anio = rand(2020, 2024); // Año bisiesto entre 2020 y 2024
    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
        echo "Días: 29 días (año bisiesto)";
    } else {
        echo "Días: 28 días";
    }
}
?>
</body>
</html>
