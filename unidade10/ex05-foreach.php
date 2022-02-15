<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("Laranja","Uva","Abacate", " Limão", "Pera", " Mamão");

        foreach ($_salada as $_frutas) {
            echo $_frutas . "<br>";
        }


        /*
        for ($_i  = 0; $_i < count($_salada); $_i ++) {
            echo $_salada[$_i] . " <br>";
        }*/
    ?>
</body>
</html>