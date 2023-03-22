<?php 


    $dados = file("./dados/fornecedores.txt");

    $id = $_GET['id'];

    #Excluindo a linha da variavel
    unset($dados[$id]);

    # Excluindo o arquivo
    unlink('./dados/fornecedores.txt');

    # Reescrevendo os dados no arquivbo
    $string = implode("", $dados);

    $arquivo = fopen("./dados/fornecedores.txt", "a+");
    fwrite($arquivo, $string);
    fclose($arquivo);

    header("location: fornecedores.php");

?>