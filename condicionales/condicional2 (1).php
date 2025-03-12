<html>
<head></head>
<body>
<?php
$num=rand(1,100);
echo"La persona tiene $num años";
echo"<br>";
if($num<=12){
echo"Entoces es un niño";
}else{
echo"";
}
echo"<br>";
if($num>12&&$num<=17){
echo"Entonces es un adolecente";
}else{
echo"";
}
echo"<br>";
if($num>17&&$num<=64){
echo"Entonces es un adulto";
}else{
echo"";
}
echo"<br>";
if($num>65){
echo"Entonces es un adulto mayor";
}else{
echo"";
}
?>
</body>
</html>