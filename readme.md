<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Autenticacion con redes sociales


_Instrucciones de Instalacion._


### Pre-requisitos 📋

_Tener instalado node, composer y laravel 5.7 en caso de no tener laravel ni composer instalados contar con un emulador como laragon para windows o valet para usuarios mac_


### Instalaciónes becesarias 🔧


_instalar dependencias de node_

```
$ npm install
```

_instalar dependencias de composer_

```
$ composer install
```


## configuraciones adicionales ⚙️


_copiar el archivo .env.example ubicado en la raiz del proyecto renombrarlo a.env y remplazar los valores con la configuracion que corresponda a u entorno de trabajo_

```
APP_URL=http://localhost

DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password
```
### Configurar la variables para la autenticacion con redes sociales 🔩



```

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
```
## Configuracion en el archivo services.php 🛠️

_Agrega tu url base en la etiqueta <YOUR_URL_BASE>_


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

### Correr app  🔩

_para ejecutar la app escribir el siguiente comando en la terminal o correr desde el emulador_

```
$ php artisan serve
```

### ejecutar migraciones 📦


```
$ php artisan migrate --seed
```
