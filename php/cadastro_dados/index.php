<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Dados</title>
  </head>
  <body>
    <?php 
      require_once 'exibicao.php';
    ?>
      
    <div class="container">
      <h1>Cadastro</h1>
      <form action="exibicao.php" method="POST">
        <label for="nome">Nome</label> <br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" />

        <br>

        <label for="cpf">CPF</label> <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" />

        <br>

        <label for="rg">RG</label> <br>
        <input type="text" id="rg" name="rg" placeholder="Digite seu RG" />

        <br>

        <label for="idade">Idade</label> <br>
        <input type="text" id="idade" name="idade" placeholder="Digite sua idade" />

        <br>

        <label for="sexo">Sexo</label> <br>
        <input type="text" id="sexo" name="sexo" placeholder="Digite seu sexo" />

        <br>

        <label for="estado_civil">Estado Civil</label> <br>
        <input type="text" id="estado_civil" name="estado_civil" placeholder="Digite seu estado civil" />

        <br>

        <label for="telefone_fixo">Telefone Fixo</label> <br>
        <input type="text" id="telefone_fixo" name="telefone_fixo" placeholder="Digite seu telefone fixo" />

        <br>

        <label for="telefone_celular">Telefone Celular</label> <br>
        <input type="text" id="telefone_celular" name="telefone_celular" placeholder="Digite seu telefone celular" />

        <br>

        <label for="endereco">Endereço</label> <br>
        <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" />

        <br>

        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </body>
</html>
