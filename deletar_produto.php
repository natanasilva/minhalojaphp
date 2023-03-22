<?php 


    $dados = file("./dados/produtos.txt");

    $id = $_GET['id'];

    #Excluindo a linha da variavel
    unset($dados[$id]);

    # Excluindo o arquivo
    unlink('./dados/produtos.txt');

    # Reescrevendo os dados no arquivbo
    $string = implode("", $dados);

    $arquivo = fopen("./dados/produtos.txt", "a+");
    fwrite($arquivo, $string);
    fclose($arquivo);

    header("location: produtos.php");

?>