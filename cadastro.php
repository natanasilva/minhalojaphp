<?php 
                        if(isset($_POST['nomeProduto'])){
                            # Receber os dados do formulário
                            $dadosForm = $_POST;
                            #tratando a data
                            $dt = explode("-",  $dadosForm['dataCadastro']);
                            $dadosForm['dataCadastro'] = $dt[2]."/".$dt[1]."/".$dt[0];

                            #Tratando o preço
                            $pr = $dadosForm['precoProduto'];
                            $dadosForm['precoProduto'] = number_format($pr,2,",",".");
                           
                            # Transformar os dados em uma string
                            $stringDados = implode(" - ", $dadosForm);

                            # Guardar os dados do cadastro em arquivo TXT
                            $arquivo = fopen("./dados/produtos.txt", "a+");
                            fwrite($arquivo, $stringDados . "\n");
                            fclose($arquivo);
                            # Redirecionar para o cadastro novamente
                            header("location: produtos.php"); 
                        }

                        if(isset($_POST['nomeFornecedor'])){
                            # Receber os dados do formulário
                            $dadosForm = $_POST;
                             #tratando a data
                             $dt = explode("-",  $dadosForm['dataCadastro']);
                             $dadosForm['dataCadastro'] = $dt[2]."/".$dt[1]."/".$dt[0];
 
                            # Transformar os dados em uma string
                            $stringDados = implode(" - ", $dadosForm);

                            # Guardar os dados do cadastro em arquivo TXT
                            $arquivo = fopen("./dados/fornecedores.txt", "a+");
                            fwrite($arquivo, $stringDados . "\n");
                            fclose($arquivo);
                            # Redirecionar para o cadastro novamente
                            header("location: fornecedores.php"); 
                        }


                        if(isset($_POST['nomeUsuario'])){
                            # Receber os dados do formulário
                            $dadosForm = $_POST;
 
                            # Transformar os dados em uma string
                            $stringDados = implode(" - ", $dadosForm);

                            # Guardar os dados do cadastro em arquivo TXT
                            $arquivo = fopen("./dados/usuarios.txt", "a+");
                            fwrite($arquivo, $stringDados . "\n");
                            fclose($arquivo);
                            # Redirecionar para o cadastro novamente
                            header("location: usuario.php"); 
                        }
?>