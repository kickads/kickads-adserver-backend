
# Laravel socialite API Authentication




## Correr localmente (MacOs)

Clonar repositorio

```bash
  git clone git@github.com:Hernanarica/laravel-socialite-google-auth.git
```

Ir a la carpeta de proyecto

```bash
  cd my-project
```

Crear el archivo .env de .env.example y agregar las variables obligatorias

```bash
  cp .env.example .env
```

Instalar dependencias de composer y npm

```bash
  composer install
  npm install
```

Generar la key de laravel

```bash
  php artisan key:generate
```

Correr contenedor con Laravel Sail(Tener Docker desktop encendido)

```bash
  ./vendor/bin/sail up
```

## Correr localmente (Windows - WSL)
Clonar repositorio

```bash
  git clone git@github.com:Hernanarica/laravel-socialite-google-auth.git
```

Ir a la carpeta de proyecto

```bash
  cd my-project
```

Crear el archivo .env de .env.example y agregar las variables obligatorias

```bash
  cp .env.example .env
```

Instalar dependencias de composer y npm

```bash
  composer install
  npm install
```

Generar la key de laravel

```bash
  php artisan key:generate
```

Correr contenedor con Laravel Sail desde terminal WSL(Tener Docker desktop encendido)

```bash
  ./vendor/bin/sail up
```
Todos los demas comandos salvo sail up, se pueden correr desde powershell,
    
## Environment Variables

`GOOGLE_CLIENT_ID=`

`GOOGLE_CLIENT_SECRET`

