<?php
include_once __DIR__ . '/../../controle/autentica_pagina.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Marmitaria Fit</title>
</head>

<body>
    <div class="screen">
        <!-- Barra lateral com botões -->
        <div class="left-side">
            <ol class="menu_list">
                <li>
                    <a href="./../homepage/home_page.php">
                        <img class="menu" src="../../assets/icons/menu.svg" alt="" width="28">
                    </a>
                </li>
                <li>
                    <a href="../gerenciarPedidos/gerenciar_pedidos.php">
                        <img src="../../assets/icons/novo_pedido.svg" alt="" width="28">
                    </a>
                </li>
                <li>
                    <a href="../estoque/estoque.php">
                        <img src="../../assets/icons/estoque.svg" alt="" width="28">
                    </a>
                </li>
                <li>
                    <a href="../novoUsuario/cadastro.php">
                        <img src="../../assets/icons/usuario.png" alt="" width="28">
                    </a>
                </li>
                <li>
                    <a href="../marmitas/marmita.php">
                        <img src="../../assets/icons/icons8-cadastro-100.png" alt="" width="28">
                    </a>
                </li>
            </ol>
        </div>

        <!-- Conteúdo da navbar e área útil -->
        <div class="right-side">
            <div class="navbar-position">
                <nav class="navbar navbar-light">
                    <div class="container-fluid nav-content">
                        <div>
                            <a href="./../homepage/home_page.php"><img src="../../assets/img/logo.png" alt="Marmitaria Fit Logo" width="45"></a>
                            <a class="navbar-brand ms-2 fs-6 fst-italic">Marmitaria Fit</a>
                        </div>
                        <div>
                            <form method="post" style="display: inline;">
                                <a href="../../controle/logout.php" class="btn btn-danger" style="height: 32px; font-size: 12px;" role="button">Sair</a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="page-content">
                <p style="text-align: center;">Seja Bem Vindo,<br>
                    <strong>
                        <?php
                        // Verifica se a variável de sessão está definida
                        if (isset($_SESSION['userName'])) {
                            echo htmlspecialchars($_SESSION['userName'], ENT_QUOTES, 'UTF-8'); // Proteção contra XSS
                        } else {
                            echo "Usuário";
                        }
                        ?>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</body>

</html>