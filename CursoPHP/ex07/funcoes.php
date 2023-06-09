<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> funções Aritméticas do PHP </h1> <br>
<?php   

//  função abs()

echo " A função 'abs()' retorna o valor absoluto de um valor  <br> ";

$resultado_abs = abs(500);

echo '$resultado_abs = abs(500)';
echo "<br>";
echo " O valor absoluto é $resultado_abs";
echo "<hr>";

// função base_convert

echo " A função 'base_convert' é um conversor de base, converte números binários <br>";

$resultado_base_convert = base_convert(254 , 10 , 8);
//  Converter 254 da base 10 para base 8

echo '$resultado_base_convert = base_convert(254 , 10 , 8)';
echo "<br>";
echo " O resultado da conversão é $resultado_base_convert";
echo "<hr>";

// função divisão inteira

echo " função Divisão inteira <br> ";

$resultado_DivReal = 5/2 ; 

echo '$resultado_DivReal = 5/2  ';
echo "<br>";
echo " O resultado da divisão real é $resultado_DivReal";
echo "<hr>";

//  resto da Divisão

echo " Resto da divisão <br>";

$resultado_RestoDiv = 5%2;

echo '$resultado_RestoDiv = 5%2';
echo "<br>";
echo " O resultado da divisão real é $resultado_RestoDiv";
echo "<hr>";

// função intdiv

echo " Função 'intdiv()' <br> ";

$resultado_IntDiv = intdiv(5 , 2 );

echo '$resultado_IntDiv = intdiv(5 , 2 )';
echo "<br>";
echo " O resultado da divisão real é $resultado_IntDiv";
echo "<hr>";

// Função min(), max()

echo " Função 'min(),max()' <br>" ;

$maior = max(5,8,10) ;
$menor = min( 2,3,1 ) ;

echo '$maior = max(5,8,10) ';
echo "<br>";
echo " O maior número é $maior ";
echo "<br>";
echo '$menor = min( 2,3,1 ) ';
echo "<br>";
echo " O menor número é $menor ";
echo "<hr>"; 

// Função pi()

echo "  Função 'pi()' <br>";

$pi = pi() ;

echo " O valor de pi é $pi ";
echo "<hr>"; 

// Potenciação

echo " função para potência 'pow()'  <br>";

$potencia = pow(3,2);
echo '$potencia = pow(3,2) ';
echo " <br>";
echo " O valor da potenciação é $potencia ";
echo "<hr>"; 

// função raiz quadrada 


echo " função para raiz quadrada 'sqrt()'  <br>";

$raiz_quadrada= sqrt(81);
echo '$raiz_quadrada= sqrt(81) ';
echo " <br>";
echo " O valor da potenciação é $raiz_quadrada ";
echo "<hr>"; 

 ?>

</body>
</html>