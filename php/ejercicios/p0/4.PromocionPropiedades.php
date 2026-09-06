<?php
  //argumentos obligados
  //Named Arguments
  function crearUsuario(string $nombre, string $email, int $edad = 18, bool $activo){
    return [
        'nombre' => $nombre,
        'email' => $email,
        'edad' => $edad,
        'activo' => $activo
    ];
    //arreglo asociativo
  }
  $usuario1 = crearUsuario(
    nombre: "Juan", 
    email: "juan@example.com",
    activo: false,
    edad: 25,
  );
  //VAR_DU,PMP() es una función que muestra información sobre una variable, incluyendo su tipo y valor. Es útil para depuración y desarrollo.
  var_dump($usuario1);