<?php
enum EstadoTarea: string {
    case Completada = 'completada';
    case Pendiente = 'pendiente';

    public function color(): string {
        return match($this) {
            self::Completada => 'green', // Azul para completadas
            self::Pendiente  => 'red',  // Aquí pones el ROJO para pendientes
        };
    }
}