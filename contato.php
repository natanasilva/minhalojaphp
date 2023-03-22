<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Contato</title>

    <link rel="canonical" href="http://localhost/cursosutd/php/exerciciomod2/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Custom styles for this template -->
    <link href="./css/precos.css" rel="stylesheet">

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
                <<a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
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
                <h1 class="display-4 fw-normal">Fale conosco</h1>
                <p class="fs-5 text-muted">Envie-nos a sua mensagem e aguarde o nosso retorno!</p>
            </div>
        </header>

        <main>
            <div class="card card-body">
                <form action="#" method="post" class="row g-3">
                    <div class="col-md-5">
                        <label for="nomeContato" class="form-label">Seu nome</label>
                        <input type="text" name="nomeContato" class="form-control" id="nomeContato" required>
                    </div>
                    <div class="col-md-5">
                        <label for="emailContato" class="form-label">Seu Email</label>
                        <input type="email" name="emailContato" class="form-control" id="emailContato" required>
                    </div>
                    <div class="col-md-2">
                        <label for="telContato" class="form-label">Seu telefone</label>
                        <input type="text" min="1" name="telContato" class="form-control" id="telContato" required>
                    </div>
                    <div class="col-md-12">
                        <label for="mensagemContato" class="form-label">Sua Mensagem</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Escreva a sua mensagem aqui!" id="mensagemContato" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </div>
                </form>

            </div>








            <!-- <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div> -->
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>