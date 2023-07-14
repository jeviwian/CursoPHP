<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="1608271.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<h1 > Números aleatórios </h1>

     <main>
        
        <?php
            $min = 0;
            $max = 100;

            $num = mt_rand ($min,$max);

            echo "<p> Gerando um número aleatório $min e $max...<br> 
             O valor gerado foi  $num   </p>"
            
        
        ?>

        <button onclick="javascript:document.location.reload()"> ↩️ Gerar outro </button>
     </main>

</body>
</html>