<?php

namespace app\models;

use Yii;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password; // Aquí almacenaremos un hash seguro de la contraseña
    public $authKey;
    public $accessToken;

    // Datos de usuarios de ejemplo (puedes cargar estos datos desde una base de datos en una implementación real)
    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => '$2y$10$eImiTXuWVxfM37uY4JANjQ==', // Ejemplo de hash generado previamente
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaYh7jYpS6.Wqf8/76dU5ltQ9/6', // Ejemplo de hash generado previamente
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Encuentra un usuario por su nombre de usuario.
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Obtiene el ID del usuario.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Obtiene la clave de autenticación.
     *
     * @return string|null
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * Valida la clave de autenticación.
     *
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Valida la contraseña proporcionada contra el hash almacenado.
     *
     * @param string $password Contraseña proporcionada por el usuario
     * @return bool Si la contraseña es válida
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    /**
     * Genera y establece un hash seguro para la contraseña.
     *
     * @param string $password Contraseña en texto plano
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
    }

    /**
     * Método para registrar un nuevo usuario (ejemplo adicional).
     *
     * @param string $username
     * @param string $password
     * @return static|null
     */
    public static function registerUser($username, $password)
    {
        // Crear un nuevo usuario con un ID único.
        $id = strval(count(self::$users) + 1);
        $user = [
            'id' => $id,
            'username' => $username,
            'password' => Yii::$app->getSecurity()->generatePasswordHash($password),
            'authKey' => Yii::$app->getSecurity()->generateRandomString(),
            'accessToken' => Yii::$app->getSecurity()->generateRandomString(),
        ];
        self::$users[$id] = $user;

        return new static($user);
    }
}