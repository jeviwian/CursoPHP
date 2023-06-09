<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Document</title>
</head>
<body>
 <!-- O PHP NÃO TEM LINHA DE DECLARAÇÃO PARA VARIÁVEIS , SOMENTE PARA CONSTANTES  -->

    <h1> Variáveis e Constantes </h1>
    <?php 
   // variaveis possui $ na frente , $nome
    $nome = "Jeane";
    $sobrenome = "Rodrigues";
    $idade = "23";
    $estado_civil = "solteira"; 
    $salario =  "1.600";
    $local_de_Trabalho = "Amaggi";
    const CURSO = "Análise de desenvolvimento de sistemas";

    // Já constante não possui $ na frente , const PAIS , o PAIS é maiusculo

    // PAÍS funciona com acento , mas é aconselhavel usar sem , pois o acento não é reconhecido em outros idiomas. Até o teclado americano , que não usa acento  

    const PAIS = " Brasil";

  //  const PAIS = "EUA"; não poderá ser atribuido outro valor a uma constante, somente em variaveis


    
    
    echo "  Muito prazer , $nome $sobrenome !  Você mora no ". PAIS ;

    echo "<br>";

    echo " <br> $nome $sobrenome, tem $idade anos, é $estado_civil , e faz ". CURSO ;

    echo "<br>";

    echo " <br> $nome $sobrenome , trabalha na empresa $local_de_Trabalho , e seu salário é de R$$salario reais. ";


// Mas aonde ficam armazenadas a variaveis e as constantes ? : NO SERVIDOR 

// para valores numericos , não são usadas as ""


// regras para nomes identificadores 
// 1 - Variáveis sempre começam com o símbolo $
// 2 - o segundo pode ser letra ou o símbolo_
// 3 - Aceita caracteres [a-z],[A-Z],[0-9] e [_]
// 4 - Aceita caracteres da tabela ASCII a     partir de 128
// 5 - Aceita caracteres acentuados como á,õ,ç
// 6 - A linguagem é case sensitive em relação aos nomes
// 7 - Nomes especiais como $this não podem ser usados

    ?>




    
</body>
</html>