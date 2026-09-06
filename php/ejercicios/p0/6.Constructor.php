<?php
//Constructor Property Promotion: Esta característica permite declarar y asignar propiedades de clase directamente en el constructor, lo que reduce la cantidad de código repetitivo y mejora la legibilidad.
class Usuario {
    
    public function __construct(
        private string $nombre,
        private string $email,
        private int $edad,
    ) {}
    public function getNombre(): string {
        return $this->nombre;
    }
}
        
    $usuario1 = new Usuario("Juan Carlos", "juan@example.com", 25);
    echo $usuario1->getNombre();