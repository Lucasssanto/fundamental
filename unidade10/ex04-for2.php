<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        /*  O contador pode ser usado de forma inversa*/
        for ($_contador = 1 ; $_contador < 7 ; $_contador ++) {
            $_sorteio = rand(1,60);
            echo $_sorteio . " ";
        }

        /* Exemplo */

        for ($_contador = 7; $_contador > 0; $_contador --) {
            $_sorteio= rand( 1,60);
            echo $_sorteio . " ";
        }
    ?>
</body>
</html>