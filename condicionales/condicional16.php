<html>
<head></head>
<body>
<?php
$n = rand(1, 1000);
echo "El número generado es: $n";
echo "<br>";
if ($n % 2 == 0) {
    echo "El número es par.<br>";
} else {
    echo "El número es impar.<br>";
}
if ($n % 5 == 0) {
    echo "El número es múltiplo de 5.<br>";
} else {
    echo "El número no es múltiplo de 5.<br>";
}
if ($n == 1) {
    echo "El número no es primo.<br>";
} elseif ($n == 2) {
    echo "El número es primo.<br>";
} else {
    $esPrimo = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $esPrimo = false;
            break;
        }
}

if ($esPrimo) {
echo "El número es primo.<br>";
} else {
echo "El número no es primo.<br>";
}
}
?>
</body>
</html>