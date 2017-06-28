# Proyecto Final - Hack Academy Backend


## Introducción


El siguiente proyecto consiste en desarrollar un sitio completo para la Automotora VIP. Separaremos el trabajo en 3 partes:


* Sección privada (admin): Solamente los usuarios autenticados podrán crear, editar y modificar autos y marcas.




* Sección pública: Sitio publico al visitante, donde se puede buscar autos por año, marca o modelo, texto, así como reservar un auto, o conocer acerca de la empresa.




* API para ser consumida por una aplicación externa.




## Rutas, Controladores y métodos


A continuación se detallan aquellas rutas privadas:


Método        | Ruta                  | Controlador@función     | Descripción                        |
------------| --------------------------|---------------------------| -------------------------------------|
| GET         | /admin/autos              |AdminCarController@index  |Mostrar listado de autos           |
| GET         | /admin/autos/crear      |AdminCarController@create  |Mostrar formulario para crear auto    |
| POST     | /admin/autos/crear      |AdminCarController@store  |Crear un nuevo auto               |
| GET         | /admin/autos/{id}       |AdminCarController@edit   |Mostrar formulario para editar un auto|
| POST     | /admin/autos/{id}/editar |AdminCarController@update     |Editar un auto                   |
| GET         | /admin/autos/{id}/eliminar|AdminCarController@delete |Eliminar un auto                 |
| GET         | /admin/marcas          |BrandController@adminList |Mostrar listado de marcas          |
| GET         | /admin/modelos         |ModelController@adminList |Mostrar listado de modelos          |


Rutas públicas:


Método     | Ruta         | Controlador@función        | Descripción                                       |
------ | ------------ |-------------------------------| --------------------------------------------------|
GET    | /          | PagesController@index       | Mostrar pantalla de inicio                        |
GET    | /nosotros    | PagesController@aboutUs      | Mostrar pantalla de nosotros                      |
GET    | /ventas     | CarController@sales         | Mostrar pantalla de ventas                        |
GET    | /reservar/{id}| CarController@showReserve       | Mostrar pantalla de reserva, con detalle de auto  |
POST   | /reservar       | CarController@reserve       | Procesar reserva y enviar mail                    |


Rutas API:


Método     | Ruta         | Controlador@función           | Descripción                     |
------ | ------------ |-------------------------------   | ----------------------------------|
GET    | /autos      | CarController@listJson      | Listar todos los autos en JSON      |
GET    | /autos/{id}  | CarController@showJson     | Listar detalle de un auto en JSON       |
GET    | /modelos        | ModelController@listJson   | Listar todos los modelos en JSON    |
GET    | /marcas     | BrandController@listJson   | Listar todas las marcas en JSON     |




## Configuración


Para instalar el proyecto seguir los siguientes pasos:


1. Utilizar `git clone https://github.com/Hack-UY/PHP_Backend_Proyecto_Final.git`, para descargar el proyecto.




2. Instalar dependencias (/vendor) utilizando Composer desde  consola. Ejecutar comando: ``composer install``.




3. Crear una base de datos utilizando phpMyAdmin llamada ``HA_Proyecto_Final`` (con cotejamineto ``utf8mb4_unicode_ci``).




4. Revisar archivo .env (en la raíz del proyecto), y asegurarse que el valor de ``DB_DATABASE`` coincida con el nombre de la base de datos recién creada (``HA_Proyecto_Final``).




5. Editar los valores de ``DB_USERNAME`` y ``DB_PASSWORD`` según corresponda de acuerdo al sistema del usuario. Normalmente se utiliza ``DB_USERNAME=root`` y ``DB_PASSWORD=(vacío)``.




6. Installar el paquete Laravel Debugbar (Buscarlo en Google).




7. Levantar servidor utilizando el comando: ``php artisan serve``.




## Migrations


Se incluyen migraciones para crear las tablas de ``brands``, ``models`` y ``users``. Para ejecutar estas migraciones:


``php artisan migrate``


## Seeds


Se incluyen además los siguientes seeds auxiliares que permiten insertar registros de prueba en las tablas de la base de datos:


``php artisan db:seed --class=BrandsTableSeeder`` (Inserta registros en la tabla brands)


``php artisan db:seed --class=ModelsTableSeeder`` (Inserta registros en la tabla models)




## Ejercicio




1. Implementar funcionalidades para la sección Admin del sitio:
   * Agregar autenticación (registro y login de usuarios).
   * Proteger las rutas que comienzan con ``/admin``.
   * Crear modelo ``Car``.
   * Crear migración para crear la tabla ``cars``, la cual debe tener: `year, model, price, description, photo, created_at, updated_at`.
   * Ejecutar seed para rellenar tabla de autos, ejecutando `php artisan db:seed --class=CarsTableSeeder`
   * Implementar el listado de `cars`, en el Admin.
   * Implementar ABM (Alta, Baja y Modificación de autos). Recordar que al editar una `car`, si la imagen se modifica hay que eliminar la imagen anterior.


2. Implementar funcionalidades para sección pública sitio:
   * Implementar las páginas estáticas del sitio: `Home`, `About Us`
   * Implementar la sección ventas
     * Listado de autos con paginado.
     * Filtrado de autos en pantalla ``/ventas``, mantener los filtros en el paginado
   * Implementar la reserva de auto
     * Mostrar el formulario con el detalle del auto seleccionado ``(id)``
     * Al enviar el formulario, se debe mandar un email con la información de la persona.
     * Se debe eliminar el auto de forma lógica.


3. Implementar una API REST:
   * Listado de autos. Se debe poder utilizar los mismos filtros que en el buscador de la web.
   * Detalle de un auto.
   * Listado de Marcas.
   * Listado de Modelos.




:muscle: :smile:


