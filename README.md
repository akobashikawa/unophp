unophp
======

Unobtrusive Simple Framework for PHP

##Idea

Siguiendo la idea de *unobtrusive javascript*, que aplica javascript tratando de respetar el html original, **unophp** aplica contenido din�mico tratando de respetar el html original.

##Uso

El proyecto se viene probando con un web server **Apache (2.4.3)** con el m�dulo **Rewrite** y soporte para **PHP** (5.4.7). Se recomiendan configuraciones similares.

Los archivos del *template* html se colocan en el directorio `html/`.

Se puede usar la ruta normal para acceder a estos templates. Por ejemplo: `http://mysite.com/html/helloworld.html`

Para acceder al contenido din�mico, o *renderizado*, se usa una ruta. Por ejemplo: `http://mysite.com/?q=helloworld` conducir� a procesar el url `helloworld` y eventualmente renderizar `html/helloworld.html`

> Ya no se usa **mod_rewrite**
>
> Se usa **QueryPath** (3.0) para seleccionar los elementos a la *jQuery*, usando selectores CSS, y aplicar los reemplazos din�micos.
>
> Para asegurar la consistencia de los url relativos en los enlaces, im�genes y otros recursos, se inserta un `base` adecuado en el `head` del renderizado.
>
> Para ver con facilitar la visualizaci�n de los argumentos, se hace un volcado de $_GET al final de cada renderizado.
>
> En este momento, el proceso es practicamente un simple eco del template. El paso siguiente es disponer de un mecanismo modular para la soluci�n de casos. Mant�ngase en contacto para encontrar novedades.
