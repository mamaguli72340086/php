# Configuración del Entorno de Desarrollo PHP con Visual Studio Code

## Extensiones recomendadas para PHP en VS Code

Para obtener una mejor experiencia de desarrollo en **Visual Studio Code**, instala las siguientes extensiones:

| Extensión | Descripción |
|-----------|-------------|
| **PHP Intelephense** | Proporciona autocompletado inteligente, navegación entre clases y funciones, detección de errores y análisis estático del código. |
| **PHP Debug** | Permite depurar aplicaciones PHP utilizando **Xdebug**, facilitando la ejecución paso a paso y el análisis de variables. |
| **PHP Namespace Resolver** | Importa automáticamente clases, organiza los `use` y resuelve espacios de nombres de forma rápida. |
| **Trailing Spaces** | Resalta y elimina automáticamente los espacios en blanco innecesarios al final de las líneas. |
| **Andromeda** | Tema oscuro moderno que mejora la legibilidad del código. |
| **Auto Rename Tag** | Renombra automáticamente la etiqueta HTML/XML de apertura y cierre al editar una de ellas. |
| **Docker** | Facilita la creación, administración y ejecución de contenedores Docker directamente desde VS Code. |
| **Material Icon Theme** *(Opcional)* | Agrega iconos modernos para carpetas y archivos, mejorando la organización visual del proyecto. |

---

# Configuración recomendada de VS Code

Abre el archivo **`settings.json`** (`Ctrl + Shift + P` → **Preferences: Open User Settings (JSON)**) y agrega la siguiente configuración:

```json
{
    "workbench.colorTheme": "Andromeda",
    "workbench.iconTheme": "material-icon-theme",

    "editor.fontFamily": "JetBrains Mono, Fira Code, Consolas",
    "editor.fontSize": 15,
    "editor.fontLigatures": true,

    "editor.wordWrap": "on",
    "editor.minimap.enabled": false,
    "editor.formatOnSave": true,

    "files.autoSave": "afterDelay",
    "files.autoSaveDelay": 1000
}
```

---

# Guía: Cómo utilizar PHP sin instalar XAMPP en Windows

PHP incorpora un **servidor web integrado**, por lo que no es necesario instalar paquetes como **XAMPP** para desarrollar aplicaciones locales.

Esta opción es ideal para:

- Aprender PHP.
- Desarrollar aplicaciones pequeñas o medianas.
- Realizar prácticas y ejercicios.
- Ejecutar proyectos durante el desarrollo.

> **Importante:** El servidor integrado de PHP está pensado únicamente para desarrollo y pruebas. No debe utilizarse en entornos de producción.

---

# 1. Descargar PHP

1. Ingresa al sitio oficial de PHP para Windows:

   <https://windows.php.net/download/>

2. Descarga la versión más reciente disponible (por ejemplo, **PHP 8.4**).

3. En la sección **Thread Safe**, descarga el archivo **ZIP**.

> Se recomienda la versión **Thread Safe** para la mayoría de los usuarios que trabajan en Windows.

---

# 2. Extraer los archivos

1. Descomprime el archivo descargado.

2. Crea una carpeta para almacenar PHP, por ejemplo:

```text
C:\php
```

o

```text
C:\php84
```

3. Copia todos los archivos descomprimidos dentro de esa carpeta.

---

# 3. Configurar las variables de entorno

Para poder ejecutar PHP desde cualquier terminal, agrega su ubicación a la variable **Path** de Windows.

## Paso 1

Presiona la tecla **Windows** y escribe:

```text
Variables de entorno
```

Selecciona:

**Editar las variables de entorno del sistema**

---

## Paso 2

Haz clic en:

```text
Variables de entorno...
```

---

## Paso 3

En **Variables del sistema**, selecciona:

```text
Path
```

y luego haz clic en:

```text
Editar
```

---

## Paso 4

Pulsa **Nuevo** y agrega la ruta donde instalaste PHP.

Ejemplo:

```text
C:\php84
```

---

## Paso 5

Opcionalmente, mueve esa ruta al inicio de la lista para que Windows la utilice con prioridad.

---

## Paso 6

Guarda los cambios haciendo clic en **Aceptar** en todas las ventanas.

> **Importante:** Si tienes abierta alguna ventana de **CMD**, **PowerShell**, **Windows Terminal** o **Visual Studio Code**, ciérrala y vuelve a abrirla para que los cambios surtan efecto.

---

# 4. Verificar la instalación

Abre una nueva terminal y ejecuta:

```bash
php --version
```

Si la instalación fue correcta, verás una salida similar a esta:

```text
PHP 8.4.x (cli)
Copyright (c) The PHP Group
Zend Engine v4.x.x
```

---

# 5. Crear un proyecto PHP

Crea una carpeta para tu proyecto.

Ejemplo:

```text
D:\mi_proyecto_php
```

Dentro de ella crea un archivo llamado:

```text
index.php
```

Con el siguiente contenido:

```php
<?php

echo "<h1>¡Hola Mundo!</h1>";
echo "<p>PHP funciona correctamente.</p>";
```

---

# 6. Iniciar el servidor integrado de PHP

Abre una terminal y navega hasta la carpeta del proyecto:

```bash
cd D:\mi_proyecto_php
```

Luego inicia el servidor:

```bash
php -S localhost:8282
```

Si todo funciona correctamente, aparecerá un mensaje similar al siguiente:

```text
PHP Development Server (http://localhost:8282) started
```

---

# 7. Abrir el proyecto en el navegador

Ingresa a la siguiente dirección:

```text
http://localhost:8282
```

Deberías visualizar la página con el mensaje:

```text
¡Hola Mundo!
PHP funciona correctamente.
```

---

# Detener el servidor

Para detener el servidor integrado, vuelve a la terminal donde está ejecutándose y presiona:

```text
Ctrl + C
```

---

# Estructura recomendada para un proyecto PHP

```text
mi_proyecto_php/
│
├── css/
│   └── estilos.css
│
├── js/
│   └── app.js
│
├── img/
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── index.php
└── README.md
```

---

# Ventajas de utilizar PHP sin XAMPP

- Instalación rápida y sencilla.
- Menor consumo de memoria y recursos.
- No requiere instalar Apache ni MySQL si no son necesarios.
- Ideal para prácticas y proyectos académicos.
- Compatible con Visual Studio Code.
- Permite ejecutar aplicaciones desde cualquier carpeta utilizando el servidor integrado de PHP.

---

# Recomendaciones finales

- Mantén PHP actualizado a la versión estable más reciente.
- Utiliza **Visual Studio Code** junto con las extensiones recomendadas.
- Activa el formato automático al guardar para mantener un código limpio.
- Organiza tus proyectos utilizando carpetas para CSS, JavaScript, imágenes y archivos reutilizables.
- Si tu proyecto requiere una base de datos, puedes instalar **MariaDB** o **MySQL** por separado, sin necesidad de utilizar XAMPP.
- Para proyectos más avanzados, considera utilizar **Composer** para gestionar dependencias y **Docker** para crear entornos de desarrollo reproducibles.