<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php /* Exmplo um de como fazer o sorteio*/
    $_contador = 1;
    while ($_contador < 4){
        $_sorteio = rand(1,100);
        echo $_sorteio . " ";
        $_contador = $_contador +1;
    }

    /* Exemplo dois de como fazer o sorteio de forma mais eficiente*/

    for ($_contador = 1; $_contador < 4 ; $_contador = $_contador +1) {
        $_sorteio = rand( 1,60);
        echo $_sorteio . " ";
    }

    /* Exemplo de fazer o sorteio de forma pratica*/

    for ($_contador = 1; $_contador < 4; $_contador ++) {
        $_sorteio = rand(1,70);
        echo $_sorteio . " ";
    }
    ?>
</body>
</html>