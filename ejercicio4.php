<?php
/*Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.*/

function frecuenciaCaracter($cadena) {
    //Creamos un array vacío donde guardaremos la frecuencia de cada carácter en la cadena
    $frecuencia = array();
    
    // con el for voy a recorrer cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        //Obteniendo el carácter en la posición actual
        $caracter = $cadena[$i];
        //con el isset evaluamos si en el array de frecuencia ya existe ese caracter
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;//si existe incrementamos el contador de ese caracter
        } else {
            $frecuencia[$caracter] = 1;//de lo contrario, solamente le asignamos el valor de 1
        }
    }
    return $frecuencia; 
}

$texto = "caracter";//este es solo un texto de ejemplo
$resultado = frecuenciaCaracter($texto);
//print_r($resultado);
echo "Texto de la cadena: $texto <br><br>";
//con el foreach vy a recorrer el array de resultados para imprimir la frecuencia de cada carácter
foreach ($resultado as $caracter => $frecuencia) {
    // voy a acceder al arreglo para obtener el caracter y el valor de la frecuencia 
    echo "La letra '$caracter' aparece $frecuencia veces.";
    echo "<br>";
}
