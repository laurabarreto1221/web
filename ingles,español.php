<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    $num = rand(1, 10);
    echo$num;
    echo"<br>";
    $numeros = array(
        1 => array('Español' => 'uno', 'Inglés' => 'one'),
        2 => array('Español' => 'dos', 'Inglés' => 'two'),
        3 => array('Español' => 'tres', 'Inglés' => 'three'),
        4 => array('Español' => 'cuatro', 'Inglés' => 'four'),
        5 => array('Español' => 'cinco', 'Inglés' => 'five'),
        6 => array('Español' => 'seis', 'Inglés' => 'six'),
        7 => array('Español' => 'siete', 'Inglés' => 'seven'),
        8 => array('Español' => 'ocho', 'Inglés' => 'eight'),
        9 => array('Español' => 'nueve', 'Inglés' => 'nine'),
        10 => array('Español' => 'diez', 'Inglés' => 'ten')
    );
    echo$numeros[$num]['Español'] . "<br>";
    echo$numeros[$num]['Inglés'];
    ?>
</body>
</html>
