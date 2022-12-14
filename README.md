# Hotel App

El repositorio contiene:

-   [`Fullstack`]() : **_Laravel_** - RESTFULL
    <br/><br/>

# Descripci贸n del proyecto 馃殌

\_Este proyecto tiene como finalidad, realizar el registro de hoteles de la franquicia Decameron, a continuaci贸n se mostraran, las funcionalidades que tiene este peque帽o

# Comenzando 馃殌

_Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local._

# Funcionalidades 馃搵

_1. Registro de hoteles_ <br>
_2. Modificar los hoteles_ <br>
_3. Asignar cantidad de habitaciones por hotel_ <br>
_4. Asignar tipo de habitaciones para cada hotel_ <br>
_5. Asignar acomodaci贸n para cada hotel_ <br>

# Validaciones 馃搵

_1. Contiene una validaci贸n donde el nombre, ciudad, direcci贸n, y n煤mero de habitaci贸nes son campos requeridos_ <br>
_2. Contiene una validaci贸n que solo dejar谩 registrar los cuartos si coinciden con la cantidad que se registro en el hotel_

# Observaciones 馃搵

_En este apartado comentare ciertas cosas que quer铆a realizar pero por temas de tiempo, no alcance a realizarlas_

_1. Editar las habitaciones ya asignadas_ <br>
_2. Crear una vista donde se pudieran visualizar habitaci贸n por habitaci贸n dependiendo el tipo o acomodaci贸n y agregar diversos atributos, como precio, disponibilidad, /o si se encuentra en mantenimiento_ <br>
_3. Crear un apartado para hacer reservas al hotel <br>_
_4. Crear sistema de usuarios con autenticaci贸n_ <br>
_5. Crear sistema de roles de usuario_ <br>
_5. Crear sistema de permisos de usuario_ <br>

# Base de datos 馃敥

_La base de datos, se encuentra en la raiz del proyecto con el nombre de db.sql, anexo a esto, en el archivo .env.example se encuentra la configuracion para dicha conexi贸n, en el archivo .env hay una variable llamada DB-PASSWORD que tiene como valor una clave, si al momento de crear la db y correr el proyecto, genera algun tipo de error, porfavor entrar a este archivo y borrar solo el valor._

# Instalaci贸n 馃敡

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
