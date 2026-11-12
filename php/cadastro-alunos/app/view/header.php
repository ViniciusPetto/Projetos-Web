<?php
    /* Obtem a página atual com base no nome do arquivo para alterar de forma dinamica a classe active do
    Boostrap presente no menu lateral abaixo*/
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
            - Font Awesome: Icones no menu lateral (https://fontawesome.com/)

            Para mais informacoes sobre arquitetura do projeto, 
            acesse o arquivo README.md na raiz do projeto.
            ========================================================
        -->
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <link href="/cadastro-alunos/public/assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/cadastro-alunos/public/assets/img/favicon.ico">
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/56df592563.js" crossorigin="anonymous"></script>
        <title>Cadastro de Alunos</title>
    </head>
    <body>
        <main>
            <nav>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <!-- A classe "active" do Bootstrap e adicionada de forma dinamica com base na pagina atual -->
                        <a class="nav-link <?php echo ($paginaAtual == 'index.php') ? 'active' : ''; ?>" aria-current="page" href="/cadastro-alunos/public/index.php">
                            <i class="fa-solid fa-person-circle-plus" style="color: rgb(255, 255, 255);"></i>
                            Cadastro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaAtual == 'cadastro.php') ? 'active' : ''; ?>" href="/cadastro-alunos/app/controller/cadastro.php">
                            <i class="fa-solid fa-list-ol" style="color: rgb(255, 255, 255);"></i>
                            Visualização do Cadastro
                        </a>
                    </li>
                </ul>   
            </nav>