<?php
   //Nullsafe operator:  (->?) se utiliza para acceder a propiedades o métodos de un objeto que podría ser nulo. Si el objeto es nulo, la expresión completa devuelve nulo en lugar de generar un error.

   class Usuario {
      public function __construct(public ? Perfil $perfil = null)
      {}
   }
   class Perfil {
      public function __construct(public ? string $avatar = null)
      {}
   }
   $usuario = new Usuario();
   //El operador nullsafe
   // if($usuario->perfil!= null){
   //    $avatar = $usuario->perfil->avatar;
   // }else {
   //    $avatar = null;
   //    echo "Avatar del usuario es null";
   // }

   //8
   $avatar = $usuario->perfil?->avatar;
   $usuarioConPerfil = new Usuario(new Perfil("avatar.png"));
   echo $usuarioConPerfil->perfil?->avatar; // Devuelve "avatar.png" 
