<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Autenticacion con redes sociales


_Instrucciones de Instalacion._


### Pre-requisitos 📋

_Tener instalado node, composer y laravel 5.7 en caso de no tener laravel ni composer instalados contar con un emulador como laragon para windows o valet para usuarios mac_


### Instalaciónes necesarias 🔧

_entrar al projecto en un terminal de comandos... escriba cd en el terminal  luego arrastre la carpeta descargada y pulse enter.

_instalar dependencias de node_

```
$ npm install
```

_instalar dependencias de composer_

```
$ composer install
```


## configuraciones adicionales ⚙️


_copiar el archivo .env.example ubicado en la raiz del proyecto renombrarlo a .env y remplazar los valores con la configuracion correspondiente_

```
APP_URL=http://localhost

DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password
```
### Configurar la variables para la autenticacion con redes sociales 🔩

_en el mismo archivo .env stear las variables a continuacion con los valores que proveen las apis de autenticacion_


```

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
```
## Configuracion en el archivo services.php 🛠️

_este archivo se encuentra en la carpeta config del proyecto agrega tu url base en la etiqueta <YOUR_URL_BASE>_


```
'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => '<YOUR_URL_BASE>/social-autenticacion/public/login/google/callback',
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => '<YOUR_URL_BASE>/social-autenticacion/public/login/facebook/callback',
    ],

```

### ejecutar migraciones 📦

_ejecutamos las migraciones para llenar la base dedatos y con el parametro --seed hacemos una insercion predefinida de un usuario a modo de prueba el cual es
user: john@mail.com
password: 123123_

```sell
$ php artisan migrate --seed
```

### Correr app  🔩

_para ejecutar la app escribir el siguiente comando en la terminal o correr desde el emulador_

```shell
$ php artisan serve
```


