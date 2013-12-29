unophp
======

Unobtrusive Simple Framework for PHP

##Idea

Siguiendo la idea de *unobtrusive javascript*, que aplica javascript tratando de respetar el html original, **unophp** aplica contenido dinámico tratando de respetar el html original.

##Uso

El proyecto se viene probando con un web server **Apache (2.4.3)** con el módulo **Rewrite** y soporte para **PHP** (5.4.7). Se recomiendan configuraciones similares.

Los archivos del *template* html se colocan en el directorio `html/`.

Se puede usar la ruta normal para acceder a estos templates. Por ejemplo: `http://mysite.com/html/helloworld.html`

Para acceder al contenido dinámico, o *renderizado*, se usa una ruta similar, pero sin html/. Por ejemplo: `http://mysite.com/helloworld.html` conducirá a renderizar `html/helloworld.html`

Es posible pasar argumentos usando un esquema clean url. Por ejemplo: `http://mysite.com/helloworld.html/a/b/c` se interpreta como `http://mysite.com/index.php?p=helloworld.html&q=a/b/c`

> Se usa **mod_rewrite** para administrar las peticiones. Aquellas que contienen `.html` son pasadas a `index.php`. Las demás son usadas tal cual.
>
> Para asegurar la consistencia de los url relativos en los enlaces, imágenes y otros recursos, se inserta un `base` adecuado en el `head` del renderizado.
>
> Para ver con facilitar la visualización de los argumentos, se hace un volcado de $_GET al final de cada renderizado.
>
> En este momento, el proceso es practicamente un simple eco del template. El paso siguiente es disponer de un mecanismo de selección para poder aplicar el contenido dinámico. Manténgase en contacto para encontrar novedades.
