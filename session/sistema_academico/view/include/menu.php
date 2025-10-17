<?php 

require_once(__DIR__ . "/../../controller/LoginController.php");

$loginCont = new LoginController();
$nome = $loginCont->getNomeUsuarioLogado();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-success px-3">
        <a class="navbar-brand" href="<?= URL_BASE ?>">Sistema academico</a>

    <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse" data-bs-target="#navSite">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navSite">
        <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown" data-bs-toggle="dropdown">Cadastros</a>
                <div class="dropdown-menu">
                    <a class="dropdown-it   em" href="<?= URL_BASE ?>/view/alunos/listar.php ">Alunos</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown" data-bs-toggle="dropdown"><?= $nome ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-it   em" href="<?= URL_BASE ?>/view/login/sair.php ">Sair</a>
                </div>
            </li>

                <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
        </ul>
    </div>   
        </ul>
    </nav>
</body>
</html>