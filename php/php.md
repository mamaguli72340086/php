## Extensiones recomendadas para PHP en VS Code

Para mejorar la experiencia de desarrollo en VS Code, instala las siguientes extensiones:

1. **PHP Intelephense** ([Enlace](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)) Proporciona autocompletado inteligente, referencias y análisis de código.
2. **PHP Debug** ([Enlace](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)) Permite depuración paso a paso con Xdebug.
3. **PHP Namespace Resolver** ([Enlace](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)) Puede importar y expandir tu clase. También puedes ordenar las clases importadas por longitud de línea o en orden alfabético.
4. **Trailing Spaces** ([Enlace](https://marketplace.visualstudio.com/items?itemName=shardulm94.trailing-spaces)) Resalte los espacios finales y elimínelos en un abrir y cerrar de ojos
5. **Andromeda** ([Enlace](https://marketplace.visualstudio.com/items?itemName=EliverLara.andromeda)) Tema instalado
6. **Auto Rename Tag** ([Enlace](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag)) Cambie automáticamente el nombre de la etiqueta HTML/XML emparejada
7. **Docker** ([Enlace](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker)) La extensión de Docker facilita la compilación, administración e implementación de aplicaciones en contenedores.

### Configuración de VS Code (settings.json)

```json
"workbench.colorTheme": "Andromeda",
"workbench.iconTheme": "material-icon-theme",
"editor.fontFamily": "Jetbrains Mono, Fira Code",
"editor.fontSize": 15,
"editor.fontLigatures": true

### Guía Definitiva: Cómo usar PHP sin XAMPP en Windows

Si quieres desarrollar en PHP sin instalar paquetes pesados como XAMPP, puedes utilizar el **Servidor Web Integrado** que trae PHP por defecto. Es más rápido, más ligero y perfecto para entornos de desarrollo local.

A continuación, se detallan los pasos para descargarlo, configurarlo y ponerlo en marcha.

---

## 1. Descargar PHP

Para descargar la versión oficial de PHP para Windows, sigue estos pasos:

1. Ve a la página oficial de descargas de PHP para Windows: **[https://windows.php.net/download/](https://windows.php.net/download/)**
2. Busca la versión más reciente (ej. PHP 8.4).
3. En la sección **Thread Safe**, haz clic en el enlace que dice **Zip** para descargar el archivo comprimido. *(Se recomienda la versión Thread Safe para la mayoría de los usuarios de Windows).*

---

## 2. Extraer y ubicar los archivos

1. Una vez descargado el archivo `.zip`, extráelo.
2. Crea una carpeta en tu disco duro para guardar PHP. Se recomienda una ruta corta y sin espacios, por ejemplo: `C:\php` o `C:\php84`.
3. Mueve todos los archivos extraídos dentro de esa nueva carpeta.

---

## 3. Configurar las Variables de Entorno

Para que tu terminal (CMD o VS Code) reconozca el comando `php` desde cualquier ubicación, debes agregar la ruta de tu nueva carpeta a las variables de entorno de Windows.

1. Presiona la tecla **Windows** en tu teclado y escribe **"Variables de entorno"**.
2. Selecciona la opción **Editar las variables de entorno del sistema**.
3. En la ventana que se abre, haz clic en el botón inferior que dice **Variables de entorno...**
4. En el panel inferior (**Variables del sistema**), busca la variable llamada **`Path`**, selecciónala y haz clic en **Editar...**
5. Haz clic en el botón **Nuevo** y pega la ruta de la carpeta donde extrajiste PHP (ej. `C:\php84`).
6. Selecciona esa nueva ruta y presiona **Mover hacia arriba** hasta que quede en la primera posición de la lista. *(Esto asegura que Windows priorice esta versión).*
7. Haz clic en **Aceptar** en todas las tres ventanas abiertas para guardar los cambios.

> **¡Importante!** Si tenías alguna terminal abierta (CMD, PowerShell o VS Code), **debes cerrarla por completo y volver a abrirla** para que detecte la nueva configuración.

---

## 4. Verificar la instalación

Abre una nueva terminal y ejecuta el siguiente comando para confirmar que PHP está configurado correctamente:

```bash
php --version

### Iniciar el Servidor Integrado de PHP
## 1. Abre tu terminal y navega hasta la carpeta donde tienes los archivos de tu proyecto (ej. tus archivos .php o .html).
cd D:\mi_proyecto_php
## 2. Ejecuta el siguiente comando para encender el servidor:
php -S localhost:8282
## 3. Abre tu navegador web favorito y entra a la siguiente dirección:
http://localhost:8282