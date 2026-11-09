<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Visualização do Cadastro</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <nav>
            <?php
                require_once "menu.html";
            ?>
        </nav>
        <?php
            if(empty($_POST)) {
                echo "Nada ainda foi cadastrado para aluno";
            }
            else {
                echo "Cadastro de Aluno: <br>";
                foreach($_POST as $chave => $valor) {
                    echo $chave . ": " . $valor . "<br>";
                }
            }     
        ?>
    </body>
</html>