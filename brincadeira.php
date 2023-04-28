<?php 

$nome = "Erick Soares";
//Verifica se contem deterimado trecho em uma string e retorna vedadeiro ou falso
str_contains($nome, "Soares");


$url = "https://alura.com.br";
//retorna um booleano
str_starts_with($url, "https");
str_ends_with($url, ".br");

$email = "ericklira99@gmail.com";
$senha = "123";
//Pegar um pedaço da string
$posicaoDoArroba = strpos($email, "@");
$nome = substr($email, 0, $posicaoDoArroba);
$dominio = substr($email, $posicaoDoArroba + 1);
strlen($senha);

//as duas retornam uma nova string
mb_strtoupper($nome);
mb_strtolower($nome);

//Se parar o nome do sobrenome
//explode retorna um array
explode(' ', $nome);

[$primeiroNome , $sobrenome] = explode(' ', $nome); 

$telefones = ["(81) 987654321", "(81) 123456789", "(87) 987654321", "(87) 123456789"];

//O php não sabe o como mostrar esse array por isso temos a função implode para definirmos um separador para cada valor
//no caso foi definido a , como seprador
echo implode(',', $telefones) . PHP_EOL;

$email2 = " ericklira99@gmail.com";

//função aparar por padrao remove espaços no inicio, e no fim, mas se for passado um segundo parametro ele remove oq for passado do inicio e do fim
//L esquerda R direita
trim($email2);

//Substituições

$texto = "Texto com qualquer coisa porra e caralho";

//retorna uma outra string com os valores subtituidos
str_replace("porra", "caralho", "****", $texto);
//se colocar a string de substituição como array ele substitui o primeiro e o rstante apaga
str_replace("porra", "caralho", ["****"], $texto);
//para substituir 1 a 1
str_replace("porra", "caralho", ["p", "c"], $texto);

//se voce quiser substituir em todo texto uma letra por outra
strtr($texto, "porra", "@#$%&");
//se quiser substituir uma palavra por algo
strtr($texto, ["porra" => "p", "caralho"=> "c"]);



