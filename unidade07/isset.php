<?php
   $_nome = "Lucas Dos Santos";
   $_telefone = "23424343";
   $_fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        echo isset($_telefone) . "<br>";
        echo isset($_nome)  . "<br>";
        echo isset($_fumante)  . "<br>";
        
        ?>
    </body>
</html>