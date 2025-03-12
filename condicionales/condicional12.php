<html>
<head></head>
<body>
<?php
$a = rand(1900, 2100);
echo "El año es: $a<br>";
if (($a % 4 == 0 && $an % 100 != 0) || ($a % 400 == 0)) {
    echo "$a es un año bisiesto.";
} else {
    echo "$a no es un año bisiesto.";
}
?>
</body>
</html>