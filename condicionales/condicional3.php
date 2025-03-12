<html>
<head></head>
<body>
<?php
$num=rand(0,100);
echo"<br>";
echo"Su calificacion es $num";
echo"<br>";
if($num<60){
echo"Usted ha reprobado :(";
}else{
echo"";
}
echo"<br>";
if($num>59&&$num<=79){
echo"Usted ha aprobado :V";
}else{
echo"";
}
echo"<br>";
if($num>79&&$num<=89){
echo"Usted obtuvo una calificacion notable :)";
}else{
echo"";
}
echo"<br>";
if($num>89&&$num<=100){
echo"Usted obtuvo una calificacion sobresaliente :O";
}else{
echo"";
}
?>
</body>
</html>
