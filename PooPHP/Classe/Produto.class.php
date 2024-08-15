<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php

    class Produto
    {

        // Declaração das minhas variaveis 

        var $Codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;


        function ImprimeEtiqueta()
        {
            echo "Descrição: ". $this->Descricao;
            echo "<br>";
            echo "Preço: ". $this->Preco;

        }
    }





    ?>
































</body>

</html>