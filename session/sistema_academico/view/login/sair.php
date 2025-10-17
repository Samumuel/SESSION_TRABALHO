<?php

require_once(__DIR__ . "/../../util/config.php");
require_once(__DIR__  . "/../../controller/LoginController.php");

    $logCont = new LoginController();
    $logCont->logOut();

    header("location: ". URL_BASE . "/view/login/login.php");
    exit;