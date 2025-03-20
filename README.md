# PRUEBA_SYSCOM
:heavy_check_mark: Check: Repositorio de la prueba para SYSCOM.


## Especificaciones Técnicas

### Tecnologías implementadas
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Librerías usadas

Se usó especificamente una librería para el tema de la generación y manimulación de los PDF.
<ul>
    <li>barryvdh/laravel-dompdf</li>
</ul>

### Variables de entorno

Se tuvo que modificar el nombre de las variables de entorno para la base de datos, ya que presentaba conflictos con proyectos personales.

```bash
# Parametros
DB_HOST_PRUEBA=[URL, dominio o endpoint de base de datos]
DB_PORT_PRUEBA=[Puerto de base de datos]
DB_USERNAME_PRUEBA=[Usuario de base de datos]
DB_PASSWORD_PRUEBA=[Contraseña de usuario de base de datos]
DB_DATABASE_PRUEBA=[Nombre de base de datos]
```

## Configuración del proyecto
```bash
# Instalar dependencias del proyecto
$ composer i
```
Este es el comando de ejecución para la creación e inserción de base de datos, de igual forma se adjunta el archivo de importación el la carpeta "database".

```bash
# Creación de tablas de base de datos e inserción de datos necesarios
$ php artisan migrate --seed
```

## Compilación y ejecución del proyecto

```bash
$ php artisan serve
```