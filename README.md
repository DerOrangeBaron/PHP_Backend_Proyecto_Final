# Proyecto Final - Hack Academy Backend

## Introducción

El siguiente proyecto consiste en desarrollar el backend para una automotora. Separaremos el trabajo en 2 grandes partes:

* Sección privada (admin): Solamente los usuarios autenticados podrán crear, editar y modificar autos y marcas.


* Sección publica: Sitio publico al visitante, donde se puede buscar autos por año, marca o modelo, asi como enviar consultas, o conocer acerca de la empresa.


## Configuración

Para instalar el proyecto seguir los siguientes pasos:

* Descargar y descomprimir ZIP con el proyecto. Navegar en consola hasta la carpeta del mismo.

* Instalar dependencias (/vendor) utilizando Composer dese la consola. Ejecutar comando: ``composer install``

* Crear una base de datos utilizando phpMyAdmin llamada **HAProyecto_Final**

* Revisar archivo .env (en la raiz del proyecto), y asegurarse que el valor de **DB_DATABASE** coincida con el nombre de la base de datos recien creada (HA_Proyecto_Final).

* Revisar que **DB_USERNAME** y **DB_PASSWORD** sean los que corresponden según el sistema del usuario.

* Correr migraciones para crear las tablas en la base de datos. Utilizar el comando: ``php artisan migrate``

* Insertar registros de prueba en las tablas de la base de datos, utilizando los siguientes comandos:
``php artisan db:seed --class=BrandsTableSeeder`` (Inserta registros en la tabla brands)
``php artisan db:seed --class=ModelsTableSeeder`` (Inserta registros en la tabla models)

* Levantar servidor utilizando el comando: ``php artisan serve``


## Notas



POR TERMINAR...