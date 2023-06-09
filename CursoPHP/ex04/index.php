<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1> STRINGS </h1>

    <?php
 //Double quoted faz a interpretação 
 //-----------------Declarando variaveis e constantes---------------//
    $nome =" Jeane ";
    $sobrenome =" Rodrigues";
    const ESTADO = "MT";
    $nom = " Rodrigo ";
    $snom = " Nogueira ";
    $canal = " curso em video";
    $ano = date('Y');

    // com apenas a tag <p> , consegue pular paragráfo
    // tag <br> pula linha 
    echo " <p>A string com aspas duplas faz a interpretação <br> ";
    echo " Olá $nome!";
    echo " <p>Já com a aspas simples, não irá fazer a interpretação  <br>";
    echo 'Olá $sobrenome';
    // hr faz uma linha na horizontal
    echo "<hr>";
    //-------------------- exemplo com constantes -------------------//
   echo "<p> A Constante já é uma situação diferente , tanto com aspas simples e dupla , não dará certo a concatenação <br>";
   echo " Moro no ESTADO <br>";
   echo ' Moro no ESTADO <br>';
   echo " Moro no ".ESTADO;
   echo "<hr>";
   echo " Para constantes e para resultado de funções , certas situações não adianta colocar dentro de aspas duplas, para interpretação, pois pode ser que não funcione <br> ";
   echo "  <br> Estamos no ano de ". date ('Y'); 
   echo "<hr>";
   echo " Sequencia de escape , são usadas para representar caracteres que não podem ser inseridas diretamente em um string ou em outro tipo de dado";
   
   //  echo " $nom "Minotauro" $snom " ERRADO
   //  echo ' $nom "Minotauro" $snom ' ERRADO

   echo " <p> $nom \" Minotauro\" $snom ";
   echo "<hr>";
   echo " <p> Ao contrario das strings '\t' e '\n' a string heredoc, podemos escrever o texto sem a necessidade de estar usando elas";
   echo <<< TESTE
        <br> Olá galera do $canal !
        tudo bem com vocês ? , como vai o ano de $ano ?

        abraços !
        TESTE;  

    ?>
</body>
</html>