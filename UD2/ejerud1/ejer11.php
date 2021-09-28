<!DOCTYPE html> 
<head>
    <title>ejer 11</title>
</head>

<body>

    <?php 
    

    echo 'Array doble inicializado en la declaración <hr>';
    $paises = array (
    'España' => array(
        'poblacion' => '46,94 millones',
        'Divisa' => 'Euro'
    ), 
    'Colombia' => array(
        'poblacion' => '50,34 millones',
        'Divisa' => 'Peso'
    ), 
    'Japon' => array(
        'poblacion' => '126,3 millones',
        'Divisa' => 'Yen'
    ), 
    'Rusia' => array(
        'poblacion' => '144,4 millones',
        'Divisa' => 'Euro'
    ), 
);

echo "<pre>";
print_r($paises);
echo "</pre>";

    ?>

</body>
 
<html>
