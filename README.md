# Pruebas unitarias y de características en Laravel

## El siguiente repositorio y documentación consta de la realización de pruebas unitarias y de características en laravel donde se mostrará todo el proceso para realizar dichas pruebas unitarias 

### Para iniciar crearemos un nuevo proyecto en laravel con el siguiente comando 

<img src="img\captura1.PNG" alt="cap1"/>

### Luego de haber creado nuestro proyecto lo primero que aremos será ir a nuestro fichero .ev y agregar nuestras credenciales de la base de datos con que queremos realizar las pruebas y almacenamiento, en mi caso creare una base de datos llamada prueba

<img src="img\captura2.PNG" alt="cap2"/>

### Ahora crearemos la migración de nuestra tabla para ello nos vamos (Si ejecutamos el comando php artisan make:model Proveedores) se nos creara una migración en la siguiente ruta database-migrations donde tendremos una llamada en mi caso Proveedores en la cual crearemos la tabla

<img src="img\captura3.PNG" alt="cap3"/>

### Ahora nos dirigimos a hacer nuestros controladores los cuales son los encargados de realizar todos los métodos necesarios para nuestro crud crearemos una carpeta llama API dentro de Http-controllers y si también queremos crear un controlador para la parde de interfaz lo podremos crear en la carpeta controllers

<img src="img\captura4.PNG" alt="cap4"/>

## Metodos que contiene el controlador de la api de Provedores 

### Metodo index para poder vizualizar datos que contiene la tabla de nuestra api

<img src="img\captura5.PNG" alt="cap5"/>

### metodo store para poder almacenar datos en nuestra api 

<img src="img\captura6.PNG" alt="cap6"/>

### metodo show para poder vizualizar datos en especifico de campos de nuestra api en este caso utilizando el id del proveedor

<img src="img\captura7.PNG" alt="cap7"/>

### metodo update parta poder editar o modificar datos de nuestra api 

<img src="img\captura8.PNG" alt="cap8"/>

### metodo delete para poder eliminar un datos en nuestra tabla api

<img src="img\captura9.PNG" alt="cap9"/>

### luego de haber creado todos los metodos necesarios parta nuestro crud crearemos los request que se muestran en dichos metodos esto para validar y declarar datos para no tener ningun tipo de error a la hoar de aplicar los metodos para ello nos vamos a Http-Request y crearemos los siguientes 

<img src="img\captura10.PNG" alt="cap10"/>

### request de guardar proveedor 

<img src="img\captura11.PNG" alt="cap11"/>

### request de editar proveedor 

<img src="img\captura12.PNG" alt="cap12"/>

### luego de eso declararemos los datos en el modelo de nuestra tabla en este caso nos vamos a Http-Models y seleccionamos nuiestro modelo Proveedores

<img src="img\captura13.PNG" alt="cap13"/>

### por ultimo crearemos las rutas para los metodos de nuestra api en routes-api.php

<img src="img\captura14.PNG" alt="cap14"/>

### Listo con eso ya tendremos nuestro crud de la api y tabla proveedores podemos realizar pruebas en el programa postman para realizar las pruebas de los metodos 

<img src="img\captura15.PNG" alt="cap15"/>

## Pruebas unitarias en laravel

### Para poder realizar las pruebas unitarias de nuestros metodos nos vamos a test luego a la carpeta Feature donde podemos declarar nuestros test en el fichero ExampleTest.php

<img src="img\captura16.PNG" alt="cap16"/>

### test para el metodo delete 

<img src="img\captura17.PNG" alt="cap17"/>

### test para el metodo update 

<img src="img\captura18}.PNG" alt="cap18"/>

### test para el metodo store 

<img src="img\captura19.PNG" alt="cap19"/>

### test para el metodo index

<img src="img\captura20.PNG" alt="cap20"/>

### podemos realizar los test con el comando php artisan test

<img src="img\captura21.PNG" alt="cap21"/>

### como podemos ver a continuacion al realizar los test de nuestros metodos estos afectan nuestra base de datos 

<img src="img\captura22.PNG" alt="cap22"/>

## Para evitar esto existe una característica que permite realizar pruebas en base de datos sin afectarla 

### Nos vamos a nuestro controlador y como podemos ver acontinuación

<img src="img\captura23.PNG" alt="cap23"/>

### Lo que pasa es que el método create, además de crear una instancia del modelo, inserta los datos a la base de datos, lo que buscamos es el método make, el cuál sólo crea modelos pero no los guarda en base datos.

<img src="img\captura24.PNG" alt="cap24"/>

### podemos volver a ejecutar los test 

<img src="img\captura25}.PNG" alt="cap25"/>

### Como podemos ver con esta caracteristica no afectara nuesta base de datos 

<img src="img\captura26.PNG" alt="cap26"/>


