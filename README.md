Proyecto de sistema de gestión de estudiantes y profesores en Yii2.

La Plantilla Básica del Proyecto Yii 2 es una aplicación esqueleto Yii 2 ideal para crear proyectos pequeños rápidamente. Incluye funciones básicas como inicio/cierre de sesión de usuario y una página de contacto.

Estructura del directorio
assets/: contiene la definición de los recursos.

commands/: contiene comandos de consola (controladores).

config/: contiene las configuraciones de la aplicación.

controllers/: contiene las clases controladoras web.

mail/: contiene archivos de vistas para correos electrónicos.

models/: contiene las clases del modelo.

runtime/: contiene archivos generados durante el tiempo de ejecución.

tests/: contiene pruebas varias para la aplicación básica.

vendor/: contiene paquetes de terceros dependientes.

views/: contiene archivos de vistas para la aplicación web.

web/: contiene el script de entrada y recursos para la web.

Requisitos
El servidor web debe ser compatible con PHP 7.4 como mínimo.

Instalación
-------
Puedes instalar la aplicación usando Composer con el siguiente comando:

'''cmd
composer update
'''

Configuración de la base de datos
-------
Edita el archivo config/db.php con datos reales, por ejemplo:
'''php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=tuBaseDeDatos',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
'''
Nota: Yii no creará la base de datos automáticamente, debes hacerlo manualmente antes de usarla.

Pruebas
-------
Las pruebas están ubicadas en el directorio tests. Hay tres tipos de pruebas disponibles:

unit: prueba de componentes del sistema.

functional: prueba de interacción del usuario.

acceptance: pruebas en navegador real.

Ejecución de pruebas:
'''cmd
vendor/bin/codecept run
'''
Si necesitas ejecutar pruebas de aceptación, sigue los pasos adicionales descritos en la sección original.