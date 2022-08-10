# Hotel App

El repositorio contiene:

-   [`Fullstack`]() : **_Laravel_** - RESTFULL
    <br/><br/>

# Descripción del proyecto 🚀

\_Este proyecto tiene como finalidad, realizar el registro de hoteles de la franquicia Decameron, a continuación se mostraran, las funcionalidades que tiene este pequeño

# Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local._

# Funcionalidades 📋

_1. Registro de hoteles_ <br>
_2. Modificar los hoteles_ <br>
_3. Asignar cantidad de habitaciones por hotel_ <br>
_4. Asignar tipo de habitaciones para cada hotel_ <br>
_5. Asignar acomodación para cada hotel_ <br>

# Validaciones 📋

_1. Contiene una validación donde el nombre, ciudad, dirección, y número de habitaciónes son campos requeridos_ <br>
_2. Contiene una validación que solo dejará registrar los cuartos si coinciden con la cantidad que se registro en el hotel_

# Observaciones 📋

_En este apartado comentare ciertas cosas que quería realizar pero por temas de tiempo, no alcance a realizarlas_

_1. Editar las habitaciones ya asignadas_ <br>
_2. Crear una vista donde se pudieran visualizar habitación por habitación dependiendo el tipo o acomodación y agregar diversos atributos, como precio, disponibilidad, /o si se encuentra en mantenimiento_ <br>
_3. Crear un apartado para hacer reservas al hotel <br>_
_4. Crear sistema de usuarios con autenticación_ <br>
_5. Crear sistema de roles de usuario_ <br>
_5. Crear sistema de permisos de usuario_ <br>

# Base de datos 🔩

_La base de datos, se encuentra en la raiz del proyecto con el nombre de db.sql, anexo a esto, en el archivo .env.example se encuentra la configuracion para dicha conexión, en el archivo .env hay una variable llamada DB-PASSWORD que tiene como valor una clave, si al momento de crear la db y correr el proyecto, genera algun tipo de error, porfavor entrar a este archivo y borrar solo el valor._

# Instalación 🔧

_Paso a paso que te dice lo que debes ejecutar para tener el proyecto ejecutandose_

-   ## Clonar proyecto

    ```shell
    git clone https://github.com/FabianRincon27/hotel-app.git
    ```

-   ## Instalar Paquetes en un solo workspace
    ```shell
    composer install
    ```
-   ## Generar la API KEY
    ```shell
    php artisan key:generate
    ```
-   ## Optimizar proyecto por temas de CACHE

    ```shell
    php artisan optimize
    ```

-   ## Generar archivo .env

    ```shell
    copy .env.example .env
    ```

-   ## Ejecutar migraciones

    ```shell
    php artisan migrate
    ```

-   ## Correr el proyecto en local

    ```shell
    php artisan serve
    ```
