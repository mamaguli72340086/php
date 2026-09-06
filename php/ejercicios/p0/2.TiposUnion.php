<?php
// Union de tipos: Un tipo de unión permite que un parámetro o valor de retorno pueda ser de más de un tipo. Esto es útil cuando una función puede aceptar diferentes tipos de datos y aún así funcionar correctamente.
function procesarDatos(string|int $dato): string|int|null {
    if (is_string($dato)) {
        return strtoupper($dato);
    }
    return $dato*2;
}
echo procesarDatos("hola");
echo procesarDatos(5);