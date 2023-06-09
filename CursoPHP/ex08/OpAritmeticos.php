<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Operadores Aritméticos </h1>
<?php

 $resultado = 2+2 ; 
     echo ' $resultado = 2+2';
     echo "<br>";
     echo " O resultado da operação é $resultado <br>";
     echo " <hr>";

  $resultado2 = "2"+"2";   
//  No php 2+2 entre aspas o resultado será 4 , pois nao acontece concatenação
     echo '$resultado2 = "2" + "2" '; 
     echo "<br>";
     echo " O resultado da operação é $resultado2 <br>";
     echo " A concatenação é feita sempre por '.' <br>";
     echo " <hr>";

  $r = "2"+"2";
//   var_dump é uma super variavel global , dá resposta e o tipo da variavel int, char ... 
     echo "O resultado é var_dump($r) "; var_dump($r); 
     echo "<hr>";

  $r2 = "2". "2";
    
     echo '$resultado2 = "2" . "2" ';
     echo "<br>";
     echo "O resultado é var_dump($r2) "; var_dump($r2); 
     echo "<br>";
     echo " ISSO È UMA CONCATENAÇÃO ! <br>";
     echo "<hr>";
 ?>



</body>
</html>