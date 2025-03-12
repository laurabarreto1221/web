<html>
<head></head>
<body>
<?php
$n=rand(5000,50000);
echo"<br>";
echo"Su salario es $n";
echo"<br>";
if($n<10000){
echo"Sin impuesto";
}
elseif($n>=10000&&$n<=20000){
echo"Pagar 10% de impuesto";
}
echo"<br>";
if($n>=20001&&$n<=35000){
echo"Pagar 20% de impuesto";
}
elseif($n>35000){
echo"Pagar 30% de impuesto";
}
?>
</body>
</html>