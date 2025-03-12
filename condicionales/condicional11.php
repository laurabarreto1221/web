<html>
<head></head>
<body>
<?php
$n=rand(-10,40);
echo"<br>";
echo"La temperatura es $n °C";
echo"<br>";
if($n<=0){
echo"Frio extremo";
}
elseif($n>=1&&$n<=10){
echo"Frio";
}
echo"<br>";
if($n>=11&&$n<=20){
echo"Templado";
}
elseif($n>=21&&$n<=30){
echo"Calido";
}
echo"<br>";
if($n>=31){
echo"Calor extremo";
}
?>
</body>
</html>