<!DOCTYPE html>
<html>
    <?php

    function geraLink($a, $s) {
        ?>
        <a href="./view/<?php echo $a ?>.php" target="blank"><?php echo $s ?></a>
        <?php
    }
    ?>

	<!-- nas tags php pode interromper ela e continuar depois de onde parou, tipo o método
	acima, mas é bom cuidar  tabulação pra não se perder-->
		 
    <head>
        <meta charset="UTF-8">
        <title>Primeiro Projeto</title>
    </head>
    <body>
        <table>
            <tr>
                <td>

                    <h1>Cadastro de Pessoas</h1>
                    <?php geraLink('gerPessoaF', 'Ger. Pessoa Física');
                    echo ' | ';
                    geraLink('gerPessoaJ', 'Ger. Pessoa Jurídica');
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>