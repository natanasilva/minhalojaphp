<?php
# Ler um arquivo
$dados = file("./dados/fornecedores.txt");
?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja</title>

    <link rel="canonical" href="http://localhost/cursosutd/php/exerciciomod2/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Custom styles for this template -->
    <link href="./css/precos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <!-- Meus Icones -->
    <link rel="apple-touch-icon" href="./assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="./assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <img class="me-2" src="./assets/img/logo.png" alt="" width="40" height="32">
                    <title>Minha Loja</title>
                    <span class="fs-4">Minha Loja</span>
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Início</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="contato.php">Contate-nos</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="produtos.php">Produtos</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="fornecedores.php">Fornecedores</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="minha_conta.php">Minha Conta</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Os Melhores Fornecedores</h1>
                <p class="fs-5 text-muted">A nossa loja tem cadastrado um total de <strong><?php echo count($dados);  ?></strong> fornecedores.</p>
            </div>
        </header>

        <main>
            <h2 class="display-6 text-center mb-4">Forncedores Cadastrados</h2>
            <div class="table-responsive">
                <div class="card-body">
                    <?php if (empty($dados)) : ?>
                        <div class="alert alert-danger alert-dismissible text-center" role="alert"> Não temos forncedores cadastrados neste momento</div>
                    <?php else : ?>
                        <table class="table table-bordered table-striped" id="tableFornecedores">
                            <thead class="text-center bg-dark text-white">
                                <th> Nome </th>
                                <th> Razão Social </th>
                                <th> CNPJ </th>
                                <th> Data de Cadastro </th>
                                <th> Ações </th>
                            </thead>
                            <tbody>

                                <?php foreach ($dados as $chave => $string) : ?>
                                    <?php $linha = explode(" - ", $string); ?>
                                    <tr>
                                        <?php foreach ($linha as $dado) : ?>
                                            <td class="text-center"><?= $dado; ?></td>
                                        <?php endforeach; ?>
                                        <td>
                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#deletar<?= $chave; ?>">
                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                            </button>
                                            <button class="btn btn-warning btn-xs">
                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deletar<?= $chave; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Deseja excluir o produto <strong><?= $linha[1]; ?></strong> Essa alteração não pode ser desfeita!
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não, Sair!</button>
                                                            <a href="deletar_fornecedor.php?id=<?= $chave; ?>" type="button" class="btn btn-success">Sim, pode continuar !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot class="text-center">
                                <th> Nome </th>
                                <th> Razão Social </th>
                                <th> CNPJ </th>
                                <th> Data de Cadastro </th>
                                <th> Ações </th>
                            </tfoot>
                        </table>
                    <?php endif ?>
                </div>
            </div>
            <div class="row text-center">

                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Cadastrar Fornecedor
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form action="cadastro.php" method="post" class="row g-3">
                            <div class="col-md-6">
                                <label for="nomeFornecedor" class="form-label">Nome do Fornecedor</label>
                                <input type="text" name="nomeFornecedor" class="form-control" id="nomeFornecedor" required>
                            </div>
                            <div class="col-md-6">
                                <label for="razaoSocial" class="form-label">Razão Social</label>
                                <input type="text" name="razaoSocial" class="form-control" id="razaoSocial" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cnpj" class="form-label">CPNJ</label>
                                <input type="text" min="1" maxlength="14" name="cnpj" class="form-control" id="cnpj" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dataCadastro" class="form-label">Data de Cadastro</label>
                                <input type="date" name="dataCadastro" class="form-control" id="dataCadastro" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Cadastrar Novo Fornecedor</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="./assets/img/logo.png" alt="" width="100" height="100">
                    <small class="d-block mb-3 text-muted">&copy; Minha Loja<br>
                        <?php $today = date("j/n/Y");
                        echo date($today); ?> - <b>Versão</b> 1.0.0</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Precisa de Ajuda?</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Central de Ajuda</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Politica de Trocas</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Segurança</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Contate-nos</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Email</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">WhatsApp</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Telegram</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Sobre nós</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Equipe</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Endereço</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Sustentabilidade</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Termos</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tableFornecedores').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "Não se encontram resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros de 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Carregando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Seguinte",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
</body>

</html>