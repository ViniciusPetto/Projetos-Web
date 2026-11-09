<?php
// Exibe os dados enviados por index.php via POST

// Verifica se o formulario foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = $_POST;

    // Verifica se os dados foram recebidos via POST pela variavel $dados
    if (!empty($dados)) {
        echo '<h2>Dados recebidos</h2>';
        echo '<ul>';

        // Itera sobre os dados recebidos e exibe cada campo (name no HTML) e valor (value do input)
        foreach ($dados as $campo => $valor) {
            echo '<li><strong>' . htmlspecialchars($campo) . ':</strong> ' . htmlspecialchars($valor) . '</li>';
        }

        echo '</ul>';
    } else {
        echo 'Nenhum dado foi enviado.';
    }
} else { // Caso a página seja acessada sem envio de dados por POST do formulario
    echo 'A página foi acessada sem envio de dados por POST.';
}
?>
