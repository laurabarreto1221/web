<html>
<head></head>
<body>
<?php
$num1 = rand(1, 50);
$num2 = rand(1, 50);
$num3 = rand(1, 50);
echo "Números generados: $num1, $num2, $num3\n";
if ($num1 >= $num2 && $num1 >= $num3) {
    $mayor = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $mayor = $num2;
} else {
    $mayor = $num3;
}
if ($num1 <= $num2 && $num1 <= $num3) {
    $menor = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $menor = $num2;
} else {
    $menor = $num3;
}
if (($num1 == $num2 && $num1 != $num3) || ($num1 == $num3 && $num1 != $num2) || ($num2 == $num3 && $num2 != $num1)) {
    $empate = false;
} elseif ($num1 == $num2 && $num1 == $num3) {
    $empate = true;
} else {
    $empate = false;
}
echo "Mayor: $mayor\n";
echo "Menor: $menor\n";
echo "¿Hay empate? " . ($empate ? "Sí" : "No") . "\n";
?>