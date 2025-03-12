<html>
<head></head>
<body>
<?php
$peso = rand(40, 120);

$altura = rand(14, 20) / 10;  // Esto generará un número entre 1.4 y 2.0

$imc = $peso / ($altura * $altura);

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Clasificación: Bajo peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Clasificación: Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Clasificación: Sobrepeso";
} else {
    echo "Clasificación: Obesidad";
}
?>
</body>
</html>