<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Cadastro de Alunos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <nav>
            <?php
                require_once "menu.html";
            ?>
        </nav>
        <form action="cadastro.php" method="POST">
            Nome: <br>
            <input type="text" name="nome"> <br>
            RA: <br>
            <input type="text" name="ra"> <br>
            Sexo: <br>
            <input type="text" name="sexo"> <br>
            Idade: <br>
            <input type="text" name="idade"> <br>
            Endereço: <br>
            <input type="text" name="endereco"> <br>
            Telefone: <br>
            <input type="text" name="telefone"> <br>
            E-mail: <br>
            <input type="text" name="email"> <br>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>