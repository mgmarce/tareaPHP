<?php
/*Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.*/

function fibonacci($n) {
    $fibonacci = [0, 1]; //Iniciando en 0 y 1

    //Ciclo for que empieza desde el término índice 2 hasta el n-1.
    for ($i = 2; $i < $n; $i++) {
        //Agrega el término enn la secuencia sumando los dos anteriores.
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    //Retorna un subconjunto del arreglo de Fibonacci desde la posicion 0 hasta n.
    return array_slice($fibonacci, 0, $n);
}

$resultado = fibonacci(9);

//print_r($resultado);


echo "Los términos de la serie Fibonacci son: <br>";
//Recorre el arreglo resultado imprimiendo cada termino (este for lo hice solo para una mejor visualización de resultados)
foreach ($resultado as $index=>$valor) {
    //Muestra el número del término (index) y su valor
    //Al índice le sumo 1 para que comience desde 1, no desde 0
    echo "Término " . ($index + 1) . ": $valor <br>";
}