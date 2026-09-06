<?php
   enum Color: string {
    case Rojo = '#FF0000';
    case Verde = '#00FF00';
    case Azul = '#0000FF';
}
Color::Rojo->value; // o 'rgb(249, 12, 12)'
Color::Azul->value; // o '#4606e9'
Color::Verde->value; // o '#22c922'
