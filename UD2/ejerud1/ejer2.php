<!DOCTYPE html> 
<head>
    <title>ejer 2</title>
</head>

<body>

    <?php 
    $nombre = "Juan";
    $direc = "calle antonio tramullas";
    $mail = "realmail@gmail.com";
    ?>
    
    <table border=solid>
        <tr>
          <th>nombre</th>
          <th>direccion</th>
          <th>mail</th>
        </tr>
        <tr>
          <td><?php echo $nombre?> </td>
          <td><?php echo $direc?></td>
          <td><?php echo $mail?></td>
        </tr>
      </table>  

</body>
 
<html>