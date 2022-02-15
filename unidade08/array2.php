<?php
     $_mensagem = array(47,29,42,04,27,21);

     sort($_mensagem);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
         echo min($_mensagem) . "<br>";
         echo max($_mensagem) . "<br>";
        ?>

        <pre>
        <?php 
           print_r($_mensagem);
        ?>
        </pre>
    </body>
</html>