<html>
<head></head>
<body>
<?php
$n = rand(1, 7);
echo "<br>";
if ($n == 1) {
    echo "Lunes";
} elseif ($n == 2) {
    echo "Martes";
} elseif ($n == 3) {
    echo "Miércoles";
} elseif ($n == 4) {
    echo "Jueves";
} elseif ($n == 5) {
    echo "Viernes";
} elseif ($n == 6) {
    echo "Sábado";
} else {
    echo "Domingo";
}
?>
</body>
</html>