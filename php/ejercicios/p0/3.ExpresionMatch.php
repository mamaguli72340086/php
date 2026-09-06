<?php
  function diasSemana(int $dia): string {
    return match($dia) {
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo",
        default => "Día inválido"
    };
  }
    echo diasSemana(3); // Salida: Miércoles