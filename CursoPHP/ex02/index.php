<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="refresh" content="60"> <!-- TAG PARA ATUALIZAR PAGINA PARA CADA 60 SEGUNDOS -->
    <title>Document</title>
</head>
<h1> Exemplo de PHP </h1>


<body>
    <?php  
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/M/Y");
    echo " e a hora atual é " . date(" G:i");
    ?>
</body>
</html>