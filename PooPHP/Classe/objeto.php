<?php

// Chamando minha Classe para meu objeto 

require_once 'Produto.class.php';

// Cria um objeto 
$produto1 = new  Produto ;

// atribuir valores

$produto1 -> Codigo = 4001;
$produto1 -> Descricao = 'CD - Beyoncé End of Time ';
$produto1 -> Preco = "R$"."89,90"; 
$produto1 -> Quantidade = "1";



// Produto 2 

$produto2 = new Produto; 

$produto2 -> Codigo = 236;
$produto2 -> Descricao = 'CD - Charlie Brown jr ';
$produto2 -> Preco = "R$"."50,00"; 
$produto2 -> Quantidade = "1";





$produto1-> ImprimeEtiqueta();
echo "<br>";
echo "<br>";
$produto2-> ImprimeEtiqueta();


?>