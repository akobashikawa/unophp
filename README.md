unophp
======

Unobtrusive Simple Framework for PHP

##Idea

Siguiendo la idea de *unobtrusive javascript*, que aplica javascript tratando de respetar el html original, **unophp** aplica contenido din�mico tratando de respetar el html original.

##Uso

El proyecto se viene probando con un web server **Apache (2.4.3)** con el m�dulo **Rewrite** y soporte para **PHP** (5.4.7). Se recomiendan configuraciones similares.

Los archivos del *template* html se colocan en el directorio `html/`.

Se puede usar la ruta normal para acceder a estos templates. Por ejemplo: `http://mysite.com/html/helloworld.html`

Para acceder al contenido din�mico, o *renderizado*, se usa una ruta similar, pero sin html/. Por ejemplo: `http://mysite.com/helloworld.html` conducir� a renderizar `html/helloworld.html`

Es posible pasar argumentos usando un esquema *clean url*. Por ejemplo: `http://mysite.com/helloworld.html/a/b/c` se interpreta como `http://mysite.com/index.php?p=helloworld.html&q=a/b/c`

> Se usa **mod_rewrite** para administrar las peticiones. Aquellas que contienen `.html` son pasadas a `index.php`. Las dem�s son usadas tal cual.
>
> Se usa **QueryPath** (3.0) para seleccionar los elementos a la *jQuery*, usando selectores CSS, y aplicar los reemplazos din�micos.
>
> Para asegurar la consistencia de los url relativos en los enlaces, im�genes y otros recursos, se inserta un `base` adecuado en el `head` del renderizado.
>
> Para ver con facilitar la visualizaci�n de los argumentos, se hace un volcado de $_GET al final de cada renderizado.
>
> En este momento, el proceso es practicamente un simple eco del template. El paso siguiente es disponer de un mecanismo modular para la soluci�n de casos. Mant�ngase en contacto para encontrar novedades.
