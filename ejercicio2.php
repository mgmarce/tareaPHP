<?php
/*
Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.
*/
//2 3 5 7 9 11 13 ...

function esPrimo($num){
    //creando variable que almacenara la cantidad de divisores del número 
    $esPrimo = 0;
    for ($i=1; $i <= $num ; $i++) { 
        //Si $num es divisible por $i, es un divisor
        if($num % $i == 0){
            $esPrimo++; //aumentara el contador de divisores
        }//si no, entonces no aumenta el contador
    }
    //retorna la cantidad de divisores
    return $esPrimo;
}
//se comprueba si el numero tiene exactamente dos divisores, si es así, entonces es Primo, de lo contrario no es primo
echo esPrimo(5) == 2 ? "Es primo" : "No es primo";