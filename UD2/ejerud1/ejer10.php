<!DOCTYPE html> 
<head>
    <title>ejer 10</title>
</head>

<body>

    <?php 
    

    $equipo = [
        'base' => 'Juan',
        'escolta' => 'Javier',
        'alero' => 'Jose',
        'alapivot' => 'Jorge',
        'pivot' => 'Jaime'
    ];

    foreach ($equipo as $clave => $jugador){
        echo $clave . ": " . $jugador . '<br>';
    }

    ?>

</body>
 
<html>
