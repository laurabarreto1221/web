<html>
<head></head>
<body>
 <?php
 $dia = date("d");
 if ($dia <= 18) {
 echo "Hasta 17 es menor de edad";
 } else {
 echo "Desde 18 es mayor de edad";
 }
 ?>
</body>
</html>