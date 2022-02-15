<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
           $_dia = "Quarta-Feira";
           switch ($_dia) {
               case "Segunda-Feira":
                   echo "Hoje é Segunda-feira";
                   break;
               case "Terça-Feira":
                   echo "Hojo é Terça-Feira";
                   break;
               case "Quarta-Feira":
                   echo "Hoje é Quarta-Feira";
                   break;
               case "Quinta-Feira":
                   echo " Hoje é Quinta-Feira";
                   break;
               case "Sexta_feira":
                   echo " Hoje é Sexta-Feira";
                   break;
               case "Sábado":
                   echo "Hoje é Sábado";
                   break;
               case "Domingo":
                   echo " Hoje é Domingo";
                   break;
               default:
                   echo "É final de semana!";
                   break;
           }
        ?>
    </body>
</html>