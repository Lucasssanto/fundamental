<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            $_data1 = new DateTime('2022-01-01');
            $_data2 = new DateTime('2022-04-03');
            $_intervalo = $_data1 ->diff($_data2);
        ?>

        <pre>
            <?php 
            print_r($_intervalo);
            ?>
        </pre>

        <pre>
            <?php 
            print_r($_intervalo->format('%a'));
            ?>
        </pre>
    </body>
</html>