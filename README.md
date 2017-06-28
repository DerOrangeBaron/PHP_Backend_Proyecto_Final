# Proyecto Final - Hack Academy Backend

## Introducción

El siguiente proyecto consiste en desarrollar un sitio completo para la Automotora VIP. Separaremos el trabajo en 3 partes:

* Sección privada (admin): Solamente los usuarios autenticados podrán crear, editar y modificar autos y marcas.


* Sección publica: Sitio publico al visitante, donde se puede buscar autos por año, marca o modelo, asi como reservar un auto, o conocer acerca de la empresa.


* API para ser consumida por una aplicación externa.


## Rutas, Controladores y métodos

A continuación se detallan aquellas rutas privadas:

Método 		| Ruta        				| Controlador@función 		| Descripción  						   |
------------| --------------------------|---------------------------| -------------------------------------|
| GET  		| /admin/autos 				|CarController@showList 	|Mostrar listado de autos 			   |
| GET  		| /admin/autos/{id} 		|CarController@showEdit		|Mostrar formulario para editar un auto|
| POST  	| /admin/autos/editar		|CarController@edit 		|Editar un auto 					   |
| GET  		| /admin/autos/crear 		|CarController@showCreate	|Mostrar formulario para crear auto    |
| POST  	| /admin/autos/crear 		|CarController@create 		|Crear un nuevo auto 				   |
| GET  		| /admin/autos/{id}/eliminar|CarController@deleteCar	|Eliminar un auto 					   |
| GET  		| /admin/marcas 			|BrandController@showList	|Mostrar listado de marcas			   |
| GET  		| /admin/modelos 			|ModelController@showList	|Mostrar listado de modelos 		   |

Rutas públicas:

Método 	| Ruta        	| Controlador@función 			| Descripción  						|
------	| ------------	|-------------------------------| ----------------------------------|
GET 	| / 			| HomeController@showHome 		| Mostrar pantalla de inicio		|
GET 	| /nosotros 	| HomeController@showAboutUs 	| Mostrar pantalla de nosotros		|
GET 	| /ventas 		| CarController@showSales 		| Mostrar pantalla de ventas		|
GET 	| /reservar/{id}| CarController@showSales 		| Mostrar pantalla de reserva 		|
POST 	| /reservar		| CarController@showSales 		| Procesar reserva y enviar mail	|

Rutas API:

Método 	| Ruta        	| Controlador@función 				| Descripción  						|
------	| ------------	|-------------------------------	| ----------------------------------|
GET 	| /autos		| CarController@listCarsJson 		| Listar todos los autos en JSON		|
GET 	| /autos/{id}	| CarController@carDetailJson 		| Listar detalle de un auto en JSON		|
GET 	| /modelos 		| ModelController@listModelsJson 	| Listar todos los modelos en JSON		|
GET 	| /marcas 		| BrandsController@listBrandsJson 	| Listar todas las marcas en JSON		|


## Configuración

Para instalar el proyecto seguir los siguientes pasos:

1. Utilizar `git clone https://github.com/Hack-UY/PHP_Backend_Proyecto_Final.git`, para descargar el proyecto.


2. Instalar dependencias (/vendor) utilizando Composer desde  consola. Ejecutar comando: ``composer install``


3. Crear una base de datos utilizando phpMyAdmin llamada ``HA_Proyecto_Final``


4. Revisar archivo .env (en la raiz del proyecto), y asegurarse que el valor de ``DB_DATABASE`` coincida con el nombre de la base de datos recien creada (``HA_Proyecto_Final``).


5. Editar los valores de ``DB_USERNAME`` y ``DB_PASSWORD`` según corresponda de acuerdo al sistema del usuario. Normalmente se utiliza ``DB_USERNAME=root`` y ``DB_PASSWORD=(vacio)``


6. Levantar servidor utilizando el comando: ``php artisan serve``

## Migrations

Se incluyen migraciones para crear las tablas de ``brands``, ``models`` y ``users``. Para ejecutar estas migraciones:

``php artisan migrate``

## Seeds

Se incluyen además los siguientes seeds auxiliares que permiten insertar registros de prueba en las tablas de la base de datos:

 ``php artisan db:seed --class=BrandsTableSeeder`` (Inserta registros en la tabla brands)

 ``php artisan db:seed --class=ModelsTableSeeder`` (Inserta registros en la tabla models)


## Ejercicio (POR TERMINAR...)



1. Implementar funcionalidades para admin:
  * Agregar autenticación (registro y login de usuarios)
  * Proteger las rutas que comiencen con ``/admin``
  * Crear modelo ``Car``
  * Crear migración para crear la tabla ``cars``
  * Ejecutar seed para rellenar tabla de autos (FALTA HACER!!)
  * Implementar ABM (Alta, Baja y Modificación de autos)

2. Implementar funciones para sitio publico
  * Filtro de autos en pantalla ``/ventas``
  * Reserva de auto con envío de mail

3. Implementar API


:muscle: :smile:
