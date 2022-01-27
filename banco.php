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
        include "./class/Cliente.class.php";
        //criar novo cliente - criar objeto
        $c1 = new Cliente();
       

        $c1->setCliente ("0001","PF","123.456.789-09",2000,500);
       

        $c1->exibirDadosCliente();
        $c1->depositar(5000);
        $c1->sacar(2000);
        $c1->sacar(6000);
        

    ?>
</body>
</html>