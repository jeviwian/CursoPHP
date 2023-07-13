<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="cerebro.png" type="image/x-icon">
    <title>Document</title>
    
</head>
<body>
    <main class="main2">
        <h1 > Resultado Final</h1> 
        <div class="quadro">
        <p>
             <?php  $NumeroBase = $_REQUEST ["NumeroBase"];

                    $Antecessor = $NumeroBase - 1;
                    $Sucessor = $NumeroBase + 1;

                    echo " O número escolhido foi <strong>$NumeroBase</strong>  <br> <br>"  ; 

                    echo " O número Antesessor de <strong>$NumeroBase</strong> é <strong>$Antecessor</strong> <br>"; 
                    echo " O número sucessor de <strong>$NumeroBase</strong> é <strong>$Sucessor</strong>";


    
    
            ?> 
        </p>
    </div>
   </main>
</body>
</html>