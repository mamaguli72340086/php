<?php
//mixed type: El tipo mixed es un tipo de datos que puede contener cualquier valor, ya sea un número, una cadena, un objeto, un array o incluso null. Esto permite una mayor flexibilidad en la programación, pero también requiere precaución al trabajar con valores de tipo mixed para evitar errores de tipo.
function procesarValor(mixed $valor): mixed {
    echo "<br>Recibi: " . var_export($valor, true) . "(tipo: " . gettype($valor) . ")<br>";
    return match(gettype($valor)) {
        'string' => strtoupper($valor),
        'integer' => $valor * 2,
        'boolean' =>$valor?"VERDADERO":"FALSO",
        'NULL' => "Era Null",
        default => "Tipos de datos no soportados: " . gettype($valor),
    };
    
}
echo procesarValor("hola");
echo procesarValor(5);      
echo procesarValor(true);
echo procesarValor(null);
echo procesarValor(3.14);
echo procesarValor([1, 2, 3]);