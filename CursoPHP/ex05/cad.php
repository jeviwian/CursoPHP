<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header> <h1>Resultado do processamento</h1></header>
    <main>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];

        echo " <p> è um prazer te conhecer <strong> $nome $sobrenome </strong> , esse é meu site ";


        ?>
        <p><a href="javascript:history.go(-1)"> Voltar para página anterior </a></p>
    </main>
</body>

</html>