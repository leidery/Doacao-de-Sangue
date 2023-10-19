<?php include '../../config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="icons/login.png" type="image/x-icon" alt="Ícone Doação de Sangue">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT ?>/public/css/style.css">
        
        <title>Doação de Sangue | <?php echo $pageTitle; ?></title>
    </head>
    <body>
        <?php include WEBSITE_LAYOUT.'/navbar.php'; ?>
        
        <main>
            <?php echo $content; ?>
        </main>
        
        <?php include WEBSITE_LAYOUT.'/footer.php'; ?>
    </body>
</html>