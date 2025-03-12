<html>
<head></head>
<body>
<?php
$num= rand(1, 3);
if ($num == 1) {
    echo "Elección: Piedra";
} elseif ($num == 2) {
    echo "Elección: Papel";
} else {
    echo "Elección: Tijera";
}
?>
</body>
</html>