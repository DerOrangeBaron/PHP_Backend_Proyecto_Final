# Proyecto Final - Hack Academy Backend

## Introducción

El siguiente proyecto consiste en desarrollar el backend para una automotora. Separaremos el trabajo en 2 grandes partes:

* Sección privada (admin): Solamente los usuarios autenticados podrán crear, editar y modificar autos y marcas.


* Sección publica: Sitio publico al visitante, donde se puede buscar autos por año, marca o modelo, asi como enviar consultas, o conocer acerca de la empresa.



## Rutas, Controladores y métodos

A continuación se detallan aquellas rutas privadas:

Método 		| Ruta        				| Controlador@función 		| Descripción  						   |
------------| --------------------------|---------------------------| -------------------------------------|
| GET  		| /admin/cars 				|CarController@showList 	|Mostrar listado de autos 			   |
| GET  		| /admin/cars/{id} 			|CarController@showEdit		|Mostrar formulario para editar un auto|
| POST  	| /admin/cars/edit 			|CarController@edit 		|Editar un auto 					   |
| GET  		| /admin/cars/create 		|CarController@showCreate	|Mostrar formulario para crear auto    |
| POST  	| /admin/cars/create 		|CarController@create 		|Crear un nuevo auto 				   |
| GET  		| /admin/cars/{id}/eliminar |CarController@deleteCar	|Eliminar un auto 					   |
| GET  		| /admin/brands 			|BrandController@showList	|Mostrar listado de marcas			   |
| GET  		| /admin/models 			|ModelController@showList	|Mostrar listado de modelos 		   |

Rutas públicas:

Método 	| Ruta        	| Controlador@función 			| Descripción  						|
------	| ------------	|-------------------------------| ----------------------------------|
GET 	| / 			| HomeController@showHome 		| Mostrar pantalla de inicio		|
GET 	| /nosotros 	| HomeController@showAboutUs 	| Mostrar pantalla de nosotros		|
POST	| /contacto 	| HomeController@sendContact 	| Procesar formulario de contacto	|
GET 	| /ventas 		| CarController@showSales 		| Mostrar pantalla de ventas		|

 

## Configuración

Para instalar el proyecto seguir los siguientes pasos:

1. Descargar y descomprimir ZIP con el proyecto. Navegar en consola hasta la carpeta del mismo.


2. Instalar dependencias (/vendor) utilizando Composer desde  consola. Ejecutar comando: ``composer install``


3. Crear una base de datos utilizando phpMyAdmin llamada ``HA_Proyecto_Final``


4. Revisar archivo .env (en la raiz del proyecto), y asegurarse que el valor de ``DB_DATABASE`` coincida con el nombre de la base de datos recien creada (``HA_Proyecto_Final``).


5. Editar los valores de ``DB_USERNAME`` y ``DB_PASSWORD`` según corresponda de acuerdo al sistema del usuario.


6. Correr migraciones para crear las tablas en la base de datos. Utilizar el comando: ``php artisan migrate``


7. Levantar servidor utilizando el comando: ``php artisan serve``

## Migrations

Se incluyen migraciones para crear las tablas ``brands``, ``models`` y ``users``. Para ejecutar las migraciones:

``php artisan migrate``

## Seeds

Se incluye en el ejercicio los siguientes seeds auxiliares quienes insertan registros en las tablas de la base de datos:

 ``php artisan db:seed --class=BrandsTableSeeder`` (Inserta registros en la tabla brands)

 ``php artisan db:seed --class=ModelsTableSeeder`` (Inserta registros en la tabla models)


## Ejercicio (POR TERMINAR...)

1. Implementar funcionalidades para 

2. Item

3. 



