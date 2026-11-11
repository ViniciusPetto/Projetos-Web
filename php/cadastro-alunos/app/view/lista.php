<div class="view-container">
    <fieldset>
        <legend>Visualização do Cadastro</legend>
        <div class="form-text">
            Todos os alunos cadastrados estão listados abaixo e ordenados pelo RA.
        </div>
        <br>
        <?php
            //----------------EXIBICAO DE DADOS----------------
            /*se a listaAlunos nao estiver vazia, quer dizer que ela leu os dados do txt decodificados
            do JSON; e usado um foreach aninhado, o de fora serve para mostrar o numero do aluno conforme
            o indice, e o de dentro, percorre os dados daquele aluno especifico exibindo sua chave (campo do form)
            e o valor daquela chave (valor cadastrado no campo)*/
            if(!empty($listaAlunos)) {
                usort($listaAlunos, function($a, $b) {
                        return $a['ra'] <=> $b['ra'];
                });

                foreach($listaAlunos as $indice => $aluno) {
                    echo "<b>Aluno " . ($indice + 1) . "</b><br>";

                    foreach($aluno as $chave => $valor) {
                        echo "<b>" . ucfirst($chave) . ":</b> " . $valor . "<br>";
                    }

                    echo "<hr>";
                }
            }
            else {
                echo "Nenhum aluno cadastrado!";
            }
        ?>
    </fieldset>
</div>