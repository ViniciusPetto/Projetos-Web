<?php
    //----------------LEITURA DE DADOS EXISTENTES----------------
    //nome do arquivo que sera utilizado para armazenar os dados
    $arquivo = '../model/cadastro.txt';

    /*verifica se o arquivo existe, caso exista, lê seu conteúdo e decodifica o JSON para um array,
    caso nao exista, cria um array vazio*/
    if(file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $listaAlunos = json_decode($conteudo, true);
    }
    else {
        $listaAlunos = [];
    }

    //----------------GRAVACAO DE NOVOS DADOS----------------
    /*verifica se o metodo de requisicao veio do formulario como POST;
    se o array $_POST nao estiver vazio, o array de listaAlunos recebe o que esta em POST,
    a variavel json recebe o conteudo de listaAlunos codificado em JSON e isso e colocado no
    arquivo .txt; o header redireciona para a mesma pagina apos o envio do formulario,
    evitando que o usuario envie os mesmos dados novamente*/

    //file_put_contents() consegue criar o arquivo caso ele nao exista, e sobrescreve o conteudo do arquivo caso ele ja exista
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach($_POST as $chave => $valor) {
            if(empty($valor)) {
                echo "<script>alert('O campo " . $chave . " não pode estar vazio!')</script>";
                exit;
            }
        }

        if(!empty($_POST)) {
            $listaAlunos[] = $_POST;
            $json = json_encode($listaAlunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents($arquivo, $json);
            header('Location: cadastro.php');
            exit;
        }
        else {
            echo "Nenhum dado recebido do formulário.<br>";
        }
    }
?>

<?php
    require_once "../view/header.php";
    echo "<br>";
    require_once "../view/lista.php";
    require_once "../view/footer.html";
?>