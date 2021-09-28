<!DOCTYPE html> 
<head>
    <title>ejer 12</title>
</head>

<body>

    <?php 
    

    $variB = 3;
    $variA = 1;
    $variC = 2;

        $part1 = ($variB * $variB) - (4 * $variA * $variC);

    if ($part1 > 0) {
        $part2a =  (-1 * $variB) + sqrt($part1);
        $part2b =  (-1 * $variB) - sqrt($part1);
        $part3a = $part2a / (2*$variA);
        $part3b = $part2b / (2*$variA);
        echo $part3a . '<br>';
        echo $part3b . '<br>';
    } else {
        echo 'false';
    }
    
    
    
    ?>

</body>
 
<html>
