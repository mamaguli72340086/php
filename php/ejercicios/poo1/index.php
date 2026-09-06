<?php
include_once 'funciones.php'; // require include include_once require_once
require_once 'Models/Tarea.php'; // require include include_once require_once
require_once 'Models/colores.php';

$tareas=[
    new Tarea('Aprender PHP', TRUE),
    new Tarea('Aprender VUE', FALSE),
    new Tarea('Aprender LARAVEL', FALSE),
    new Tarea(completado:TRUE, titulo:'Aprender React'),
];
//dd($tareas);
$tareasCompletadas = array_filter($tareas, function ($tarea) {
     return $tarea->completado;
});

$tareasPendientes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require_once 'index.view.php';
?>

