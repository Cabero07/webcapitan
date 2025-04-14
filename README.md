<p align="center"> <a href="https://github.com/yiisoft" target="_blank"> <img src="https://avatars0.githubusercontent.com/u/993323" height="100px"> </a> <h1 align="center">Plantilla Básica del Proyecto Yii 2</h1> <br> </p>

La Plantilla Básica del Proyecto Yii 2 es una aplicación esqueleto Yii 2 ideal para la creación rápida de proyectos pequeños.

La plantilla incluye funciones básicas como inicio/cierre de sesión de usuario y una página de contacto. También contiene configuraciones comúnmente usadas que te permiten centrarte en agregar nuevas funcionalidades a tu aplicación.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

      assets/             contiene definiciones de recursos
      commands/           contiene comandos de consola  (controladores)
      config/             contiene configuraciones de la aplicación
      controllers/        contiene clases controladoras Web
      mail/               contiene archivos de vistas para correos  electrónicos
      models/             contiene clases de modelo
      runtime/            contiene archivos generados durante la  ejecución
      tests/              contiene pruebas varias para la aplicación
      vendor/             contiene paquetes de terceros dependientes
      views/              contiene archivos de vistas para la  aplicación 
      web/                contiene el script de entrada y recursos Web

REQUISITOS
------------

El requisito mínimo para esta plantilla de proyecto es que tu servidor web soporte PHP 7.4.

INSTALACIÓN
------------

### Instalación vía Composer

Si no tienes [Composer](https://getcomposer.org/), puedes instalarlo siguiendo las instrucciones en [getcomposer.org](https://getcomposer.org/doc/00-intro.md#installation-nix).


CONFIGURACIÓN
-------------

### Base de Datos
Edita el archivo `config/db.php` con datos reales. Por ejemplo:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

**NOTES:**

- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

PRUEBAS
-------

Las pruebas están localizadas en el directorio tests y se desarrollaron con el [Codeception PHP Testing Framework](https://codeception.com/).. Por defecto, existen tres suites de pruebas disponibles:

`unit`: Pruebas que verifican los componentes del sistema.

`functional`: Pruebas de interacción del usuario.

`acceptance`: Deshabilitadas por defecto, ya que requieren configuración adicional para ejecutarse en un navegador real.

Ejecuta las pruebas con el siguiente comando:

```
vendor/bin/codecept run
```

El comando anterior ejecutará pruebas unitarias y funcionales. Las pruebas unitarias evalúan componentes individuales del sistema, mientras que las pruebas funcionales verifican la interacción del usuario.

### Ejecutar pruebas de aceptación

To execute acceptance tests do the following:  

1. Renombra el archivo `tests/acceptance.suite.yml.example` a `tests/acceptance.suite.yml` para habilitar la configuración de la suite.

2. Sustituye el paquete `codeception/base` en `composer.json` por `codeception/codeception` para instalar la versión completa de Codeception.

3. Actualiza las dependencias utilizando Composer:

    ```
    composer update  
    ```

4. Descarga [Selenium Server](https://www.seleniumhq.org/download/)e inicialo:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```
    Si utilizas Selenium Server 3.0 con Firefox (desde la versión 48) o Google Chrome (desde la versión 53), debes descargar [GeckoDriver](https://github.com/mozilla/geckodriver/releases) o [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads). Lanza Selenium de esta manera:

    ```
    # Para Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # Para Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ```

    Alternativamente, usa un contenedor Docker configurado con versiones anteriores de Selenium y Firefox:

    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Opcional) Crea la base de datos `yii2basic_test` y actualízala aplicando las migraciones (si tienes):

   ```
   tests/bin/yii migrate
   ```

   La configuración de la base de datos está en `config/test_db.php`.

6. Inicia el servidor web:

    ```
    tests/bin/yii serve
    ```

7. Ahora puedes ejecutar todas las pruebas disponibles:

   ```
   # Ejecutar todas las pruebas disponibles
   vendor/bin/codecept run

   # Ejecutar pruebas de aceptación
   vendor/bin/codecept run acceptance

   # Ejecutar solo pruebas unitarias y funcionales
   vendor/bin/codecept run unit,functional
   ```

### Soporte para cobertura de código

La cobertura de código está deshabilitada por defecto en el archivo `codeception.yml`. Descomenta las líneas necesarias para habilitarla. Luego, ejecuta las pruebas recopilando cobertura con los siguientes comandos:

```
# Cobertura para todas las pruebas
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

# Cobertura solo para pruebas unitarias
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

# Cobertura para pruebas unitarias y funcionales
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

Puedes encontrar los resultados de la cobertura en el directorio `tests/_output`.
