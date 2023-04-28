<?php 
//preg_match primeiro parametro a expressão regular segundo parametro oq vc quer avaliar. Terceiro parametro grupo de captura que é um array
$telefones = ["(81) 98764 - 4561", "(81) 98721 - 5555", "(81) 98724 - 2566", "(81) 99854 - 6325"];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match('/^\([0-9]{2}\) [0-9]{5} - [0-9]{4}$/', $telefone);    
    if ($telefoneValido) {
        echo "Telefone Valido";
    }else{
        echo "Telefone Invalido";
    }



//Para substituir usando regex é usado os grupos de captura
//substituindo o dd por xx
echo preg_replace('/^\(([0-9]{2})\) ([0-9]{5} - [0-9]{4})$/', '(XX) \2', $telefone);
}

