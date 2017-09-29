<?php
require 'config/config.php'
?>
<?php
/*
    $user = new src\Models\UserModel;

    $attributes = [
        'nome' => 'Jose',
        'email'=> 'jose@gmail.com',
        'usuario'=>'jose',
        'senha'=>'123456'
    ];
    $user->update(2,$attributes);
*/
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Site Quality</title>

    <link rel="stylesheet" type="text/css" href="public/assets/node_modules/semantic-ui/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/node_modules/semantic-ui/dist/components/icon.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>

</head>
<body>
    <div class="container" style="width: 800px; margin: 0 auto ">


        <?php require (isset($_GET['p'])) ? 'includes/'.$_GET['p'].'.php' : 'includes/home.php'; ?>


    </div>
</body>
</html>
