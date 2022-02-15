<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
           $_idade = 18;
           $_sexo = "femenino";

           if ( $_idade >= 18 && $_sexo  == "femenino") {
               echo "Pode entrar na festa!";
           } else {
               echo " não pode entrar na festa!";
           }
        ?>
    </body>
</html>