<?php
include_once 'funciones.php'; // require include include_once require_once
require_once 'colores.php';

//cual es la diferencia?
//include, require: ambos incluyen un archivo, pero require genera un error fatal si el archivo no se encuentra, mientras que include solo genera una advertencia y continúa la ejecución del script.

$tareas = [
    ['Aprender PHP', TRUE],
    ['Aprender VUE', FALSE],
    ['Aprender LARAVEL', FALSE],
];
//filter: filtra un array según una función de devolución de llamada (callback) que devuelve verdadero o falso para cada elemento del array. Devuelve un nuevo array con los elementos que cumplen la condición. sus paramentros son: array, callback, flag
//function ($tarea) { return $tarea[1]; } es una función anónima que devuelve verdadero si el segundo elemento del array $tarea es verdadero, y falso en caso contrario. Esta función se utiliza como callback para filtrar el array $tareas y obtener solo las tareas completadas.
$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea[1];
});


$tareasPendientes = array_filter($tareas, function ($tarea) {
    return !$tarea[1];
});

dd($tareasCompletadas);
dd($tareasPendientes);

require_once 'index.view.php';
?>

