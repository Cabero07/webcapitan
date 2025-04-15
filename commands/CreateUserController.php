<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use app\models\User;

class CreateUserController extends Controller
{
    /**
     * Crea un usuario con los datos proporcionados.
     * @param string $username Nombre de usuario
     * @param string $nombre Nombre real
     * @param string $apellido Apellido
     * @param string $email Correo electrónico
     * @param string $password Contraseña
     * @return int Código de salida
     */
    public function actionIndex($username, $nombre, $apellido, $email, $password)
    {
        $user = new User();
        $user->username = $username;
        $user->nombre = $nombre;
        $user->apellido = $apellido;
        $user->email = $email;
        $user->auth_key = Yii::$app->getSecurity()->generateRandomString();
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($password);
        $user->status = 10; // Activo
        $user->created_at = time();
        $user->updated_at = time();

        if ($user->save()) {
            $this->stdout("Usuario creado exitosamente.\n");
            return ExitCode::OK;
        } else {
            $this->stderr("Error al crear el usuario:\n");
            foreach ($user->getErrors() as $error) {
                $this->stderr("- " . implode(", ", $error) . "\n");
            }
            return ExitCode::UNSPECIFIED_ERROR;
        }
    }
}