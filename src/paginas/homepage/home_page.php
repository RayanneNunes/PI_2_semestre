<?php
include_once __DIR__ . '/../../controle/autentica_pagina.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_page.css?v.1">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Marmitaria Fit</title>
</head>

<body class="bg-light">
    <div class="d-flex flex-column flex-md-row vh-100">
        <!-- Sidebar -->
        <div class="sidebar text-white d-flex flex-column align-items-center py-4 px-3" style="width: 60px;">
            <a href="./../homepage/home_page.php" class="mb-4">
                <img src="../../assets/icons/menu.svg" alt="Menu" width="32">
            </a>
            <a href="../comanda/comanda.php" class="mb-3">
                <img src="../../assets/icons/comanda.svg" alt="Comanda" width="28">
            </a>
            <a href="../estoque/estoque.php" class="mb-3">
                <img src="../../assets/icons/estoque.svg" alt="Estoque" width="28">
            </a>
            <a href="../novoUsuario/cadastro.php" class="mb-3">
                <img src="../../assets/icons/usuario.png" alt="Cadastro" width="28">
            </a>
                        <a href="../marmitas/marmita.php" class="mb-3">
                <img src="../../assets/icons/icons8-cadastro-100.png" alt="Cadastro" width="28">
            </a>
        </div>

        <!-- Parte Central -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="topo navbar shadow-sm py-3">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <a href="./../homepage/home_page.php">
                            <img src="../../assets/img/logo.png" alt="Marmitaria Fit Logo" width="45">
                        </a>
                        <span class="ms-2 fs-6 fst-italic">Marmitaria Fit</span>
                    </div>
                    <form method="post">
                        <button class="btn btn-danger btn-sm" type="submit" name="sair">Sair</button>
                    </form>
                </div>
            </nav>

                <div class="page-content d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <p class="text-center">
                        Seja Bem Vindo,<br>
                        <strong>
                            <?php
                            if (isset($_SESSION['userName'])) {
                                echo htmlspecialchars($_SESSION['userName']); 
                            } else {
                                echo "Usuário";
                            }
                            ?>
                        </strong>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>

<script src="./script/marmita.js"></script>

</html>
