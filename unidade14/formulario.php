<?php 
    if(isset($_POST"formulario")) {
        print_r($_POST);
    }

    $_nome = isset($_POST["nome"])  ? $_POST["nome"] : " Sem definição!";
        $_email =  isset($_POST["email"]) ? $_POST["email"] : " Sem definição!";


?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php  if(isset(["formulario"])) {?>
        <form action="formulario.php" method="get">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
            <?php  
        } else {
            echo "Nome: " . $_nome . "<br>";
            echo "Email: " . $_nome . "<br>";
        }?>    
        </form>
    </body>
</html>