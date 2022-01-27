<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    include - faz a inclusão toda vez q a página é carregada e quando dá erro gera um WARNING
    require - faz a inclusão apenas uma vez, mas ao dar erro o sistema pára (fatal erro)
    */

    include "./class/Usuario.class.php";

    //declarando um novo objeto
    $usuario1 = new Usuario();
    $usuario2 = new Usuario();

    echo $usuario1->getUsuario ("Eduardo","eduardo@gmail.com","9999-9999");

    ?>
</body>
</html>