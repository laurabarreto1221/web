<html>
<head></head>
<body>
<?php
$n= rand(0, 23);
echo"Son las $n horas";
echo"<br>";
if($n>=5&&$n<=11){
echo"¡Buenos días!";
}
elseif($n>=12&&$n<=18){
echo"¡Buenas tardes!";
}else{
echo"¡Buenas noches!";
}
?>
</body>
</html>