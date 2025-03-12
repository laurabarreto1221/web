<html>
<head></head>
<body>
<?php
$n=rand(10,180);
echo"<br>";
echo"La velocidad es de $n Km/h";
echo"<br>";
if($n<30){
echo"Vehículo muy lento";
}
elseif($n>=30&&$n<=80){
echo"Velocidad normal";
}
echo"<br>";
if($n>=81&&$n<=120){
echo"Velocidad rápida";
}
elseif($n>120){
echo"¡Exceso de velocidad!";
}
?>
</body>
</html>