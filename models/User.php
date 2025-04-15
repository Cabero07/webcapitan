<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * Devuelve el nombre de la tabla asociada con este modelo.
     *
     * @return string
     */
    public static function tableName()
    {
        return 'tbl_usuarios'; // Nombre de la tabla en la base de datos
    }

    /**
     * Encuentra un usuario por ID.
     *
     * @param int|string $id
     * @return static|null
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id_usuario' => $id]); // Usa 'id_usuario' como clave primaria
    }

    /**
     * Encuentra un usuario por token de acceso.
     *
     * @param string $token
     * @param mixed $type
     * @return static|null
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['accessToken' => $token]); // Asegúrate de tener este campo si lo necesitas
    }

    /**
     * Encuentra un usuario por nombre de usuario.
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Obtiene el ID del usuario.
     *
     * @return int|string
     */
    public function getId()
    {
        return $this->id_usuario; // Usa 'id_usuario' como identificador único
    }

    /**
     * Obtiene la clave de autenticación del usuario.
     *
     * @return string
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Valida la clave de autenticación.
     *
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Valida la contraseña del usuario.
     *
     * @param string $password Contraseña proporcionada por el usuario
     * @return bool
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password_hash); // Usa 'password_hash'
    }
}