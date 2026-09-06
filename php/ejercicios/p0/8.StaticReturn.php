<?php
class Calculadora
{
    protected int $valor = 0;
    public function sumar(int $numero): static
    {
        $this->valor += $numero;
        return $this;
    }
    public function restar(int $numero): static
    {
        $this->valor -= $numero;
        return $this;
    }
    public function obtenerValor(): int
    {
        return $this->valor;
    }   
}
$calc =new Calculadora();
$resultado = $calc->sumar(5)->restar(3)->obtenerValor();
echo $resultado; // Salida: 2