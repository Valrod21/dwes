<!DOCTYPE html> 
<head>
    <title>ejer 9</title>
</head>

<body>

    <?php 
    
    $equipo[] = 'Juan';
    $equipo[] = 'Javier';
    $equipo[] = 'Jose';
    $equipo[] = 'Jorge';
    $equipo[] = 'Jaime';

    foreach ($equipo as $jugador){
        echo $jugador . '<br>';
    }


    foreach ($equipo as $clave => $jugador){
        echo $clave . ": " . $jugador . '<br>';
    }

    echo "<pre>";
    var_dump($equipo); 
    echo "</pre>";

    echo "<pre>";
    print_r($equipo); 
    echo "</pre>";
    ?>

</body>
 
<html>