<html>
<head></head>
<body>
<?php
$num1=rand(1,10);
$num2=rand(1,10);
$num3=rand(1,10);
echo"<br>";
echo"lado 1: $num1 cm";
echo"<br>";
echo"lado 2: $num2 cm";
echo"<br>";
echo"lado 3: $num3 cm";
echo"<br>";
if($num1==$num2&&$num3==$num1){
echo"El triangulo es equilatero";
}elseif (($num1 == $num2 && $num1 != $num3) || ($num1 == $num3 && $num1 != $num2) || ($num2 == $num3 && $num1 != $num2)) {
    echo "El triángulo es isósceles";
} else {
echo "El triángulo es escaleno";
}
?>
</body>
</html>
