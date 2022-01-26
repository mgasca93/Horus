# Horus
Horus Framework incluye la estructura base de un proyecto web basado en la arquitectura MVC para el desarrollo de aplicaciones web hechas con PHP, 
al utilizar Horus es muy facil comenzar los proyectos ya que la estructura de archivos esta pensada para que solo edites unas cuantas lineas de código 
y de inmediato tengas lista una conexion a tu base de datos, además, los controladores, vistas y modelos altamente personalizados.
Horus Framework incluye bootstrap 5 para que puedas construir vistas hermosas de forma facil y dinamica.

# Estructura de ficheros

# Directorio app
El directorio App es donde te encontraras trabajando la mayor parte del tiempo, ya que es aqui donde crearas los controladores y los modelos de tu aplicación web.

# Directorio config
En este directorio te encontraras con una clase llamda Env, y es en esta donde se realizara la alta y/o modificacion de las variables de entorno, ya sea para 
establecer una conexión a la bases de dfatos o cualquier otra que requieras a lo largo del desarrollo.

# Directorio core
En este directorio encontramos el corazón de Horus, estas clases es necesario no modificarlas a menos que sea muy necesario para adaptar tu aplicación.

# Directorio logs

Horus cuenta con una clase especializada para el manejo de errores en tiempo de ejecución, para poder habilitar el modo debug, es necesario ir a la clase Env y establecer el valor
de la constante SHOW_ERRORS en true, si esta se encuentra en false, todos los errores se registraran en esta carpeta.