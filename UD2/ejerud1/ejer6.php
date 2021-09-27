<!DOCTYPE html> 
<head>
    <title>ejer 6</title>
</head>

<body>

    <?php 
    $valor1= 0;
    $valor2= 1;
    $valor3= 0;
    
    echo "$valor1 <br>";
    echo "$valor2 <br>";
    
    for ( $i = 1; $i < 9; $i = $i + 1) {
        
        $valor3 = $valor2 + $valor1;
        echo "$valor3 <br>";
        $valor1 = $valor2;
        $valor2 = $valor3;

    }
    ?>

</body>
 
<html>