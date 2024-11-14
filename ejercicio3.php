<?php
/*Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.*/

function esPalindromo($cadena) {
    //Elimina espacios en blanco y convierte la cadena a minúsculas
    $cadena = str_replace(' ', '', strtolower($cadena));

    $arreglo = str_split($cadena);//convierte la cadena a un arreglo de caracteres
    $longitud = count($arreglo);//obtiene la longitud del arreglo
    
    //el for va a comparar los caracteres desde el principio con los caracteres desde el final
    for ($i = 0; $i < $longitud / 2; $i++) {
        //si los caracteres no son iguales no es un palíndromo
        if ($arreglo[$i] !== $arreglo[$longitud - 1 - $i]) {
            return false; 
        }
    }
    return true;
}

$texto = "oso";
//con el resultado obtenido evalua, si es true es palíndromo, si es false no es un palíndromo
echo esPalindromo($texto) ? "Es un palíndromo" : "No es un palíndromo";