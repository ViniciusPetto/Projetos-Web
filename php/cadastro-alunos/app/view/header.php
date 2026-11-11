<?php
    $paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <!-- 
            ========================================================
            Atividades de Fixacao: Unidades 13 a 17 - SI401 Programacao para a Web
            Autor: Vinicius Pommer Petto - RA: 252160
            
            Créditos e Tecnologias:
            - Framework CSS/JS: Bootstrap v6.0.0-alpha.1
                (Utilizado na estruturação do menu lateral "<nav>" e na estilização dos 
                inputs e botões do formulário).
            - Favicon: Flaticon (https://www.flaticon.com/br/)
            - Conversor de Favicon: faicon.io (https://favicon.io/)

            Para mais informacoes sobre arquitetura do projeto, 
            acesse o arquivo README.md na raiz do projeto.
            ========================================================
        -->

        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
        <link href="/cadastro-alunos/public/assets/css/style.css" rel="stylesheet">
        <title>Cadastro de Alunos</title>
        <link rel="icon" type="image/x-icon" href="/cadastro-alunos/public/assets/img/favicon.ico">
    </head>
    <body>
        <main>
            <nav>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaAtual == 'index.php') ? 'active' : ''; ?>" aria-current="page" href="/cadastro-alunos/public/index.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaAtual == 'cadastro.php') ? 'active' : ''; ?>" href="/cadastro-alunos/app/controller/cadastro.php">Visualização do Cadastro</a>
                    </li>
                </ul>
            </nav>