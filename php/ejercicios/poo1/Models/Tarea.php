<?php
   class Tarea{
    //metodos y propiedades de la clase Tarea
    public function __construct(
        public string $titulo, 
        public bool $completado=false)
    {}  
    public function completado():void
    {
        $this->completado=true;
    }
    public function color(): string {
        //Es un condicional abreviado if / else en una sola línea. Funciona así:$$\text{Condición} \quad ? \quad \text{Valor si es TRUE} \quad : \quad \text{Valor si es FALSE}$$
        return $this->completado ? 'green' : 'red';
    }
    public function guardar(string $nombre):void{
        //fopen, sirve para abrir un archivo, fclose, sirve para cerrar un archivo
       $archivo=fopen($nombre,'w');
       //fwrite($archivo,"Titulo: $this->titulo\nCompletado: $this->completado\n");
       fwrite($archivo,"Titulo: $this->titulo\nCompletado:". ($this->completado ? 'Si' : 'No') ."\n");
       fclose($archivo);
    }
   
}
$tarea=new Tarea('Ejercicio 3',true);
$tarea->guardar('ejercicio3.txt');