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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="./css/style.css">
    <!-- Custom styles for this template -->
    <link href="./css/precos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <h1 class="display-4 fw-normal">Minha Conta</h1>
                <p class="fs-5 text-muted">Faça o login para acessar a sua area administrativa.</p>
            </div>
        </header>

        <main>
            <div class="row text-center">

                <div class="card">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Faça o login para acessar a sua area administrativa.</p>

                                <form action="logar.php" method="post">
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="senha" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Lembra a Senha
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Entrar Agora</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                <!-- <div class="social-auth-links text-center mb-3">
                                    <p>- OU -</p>
                                    <a href="#" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i> Entre Usando o Facebook
                                    </a>
                                    <a href="#" class="btn btn-block btn-danger">
                                        <i class="fab fa-google-plus mr-2"></i> Entre Usando o Google
                                    </a>
                                </div> -->
                                <!-- /.social-auth-links -->

                                <p class="mb-1">
                                    <a href="recuperar_senha.php">Recuperar a minha senha</a>
                                </p>
                                <p class="mb-0">
                                    <a href="registrar.php" class="text-center">Registre-se Agora</a>
                                </p>
                            </div>
                            <!-- /.login-card-body -->





                        </div>
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

    <?php

    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "email_nao_encontrado") {
            $titulo = "Email não cadastrado";
            $subtitulo = "Email está incorreto. Favor tentar novamente.";
            $tipo = "error";
        } elseif ($_GET['msg'] == "senha_incorreta") {
            $titulo = "Senha Incorreta";
            $subtitulo = "Erro de senha. Favor tentar novamente.";
            $tipo = "error";
        } elseif ($_GET['msg'] == "login_sucedido") {
            header("location: index.php");
        }
    ?>

        <script type="text/javascript">
            $(document).ready(function() {
                Swal.fire(
                    "<?= $titulo; ?>",
                    "<?= $subtitulo; ?>",
                    "<?= $tipo; ?>"
                )
            });
        </script>

    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>