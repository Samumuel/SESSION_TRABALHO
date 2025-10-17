<?php 

require_once(__DIR__ . "/../../util/config.php");
require_once(__DIR__ . "/../../controller/LoginController.php");

$loginCont = new loginController();
$estaLogado = $loginCont->usuarioEstalogado();
if( ! $estaLogado){
    header("location: " . URL_BASE . "/view/login/login.php");
    exit;
}