<?php
    $projectName = '/Doacao-de-Sangue';

    $routes = [
        $projectName.'/' => 'views/website/pages/home.php',
        $projectName.'/esqueci-a-senha' => 'views/auth/forgot-password/index.php',
        $projectName.'/login' => 'views/auth/login/index.php',
        $projectName.'/cadastrar' => 'views/auth/register/index.php',
    ];

?>