<?php
    require(SITE_ROOT.'/Models/UsuarioModel.php');
    require(SITE_ROOT.'/Models/HemobancoModel.php');

    $projectName = '/Doacao-de-Sangue';

    $routes = [
        $projectName.'/' => SITE_ROOT.'/views/website/pages/home/index.php',
        $projectName.'/esqueci-a-senha' => SITE_ROOT.'/views/auth/forgot-password/index.php',
        $projectName.'/login' => SITE_ROOT.'/views/auth/login/index.php',
        $projectName.'/cadastrar' => SITE_ROOT.'/views/auth/register/index.php',
        $projectName.'/perfil' => SITE_ROOT.'/views/dashboard/perfil/index.php', // Rota para perfil
        $projectName.'/hemobanco' => SITE_ROOT.'/views/dashboard/hemobanco/index.php', // Rota para hemobanco
    ];


?>