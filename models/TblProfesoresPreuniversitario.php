<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_profesores_preuniversitario".
 *
 * @property int $id
 * @property string $ci
 * @property string $apellido1ro
 * @property string $apellido2do
 * @property string $nombre1ro
 * @property string|null $nombre2do
 * @property string|null $telefono
 * @property string $sexo
 * @property string $asignatura
 * @property string|null $calle
 * @property string|null $numero
 * @property string|null $apartamento
 * @property string|null $piso
 * @property string|null $entre_calle
 * @property string|null $y_calle
 * @property string|null $barrio
 */
class TblProfesoresPreuniversitario extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_profesores_preuniversitario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre2do', 'telefono', 'calle', 'numero', 'apartamento', 'piso', 'entre_calle', 'y_calle', 'barrio'], 'default', 'value' => null],
            [['ci', 'apellido1ro', 'apellido2do', 'nombre1ro', 'sexo', 'asignatura'], 'required'],
            [['ci'], 'string', 'max' => 20],
            [['apellido1ro', 'apellido2do', 'nombre1ro', 'nombre2do', 'asignatura', 'calle', 'entre_calle', 'y_calle', 'barrio'], 'string', 'max' => 50],
            [['telefono'], 'string', 'max' => 15],
            [['sexo', 'numero', 'apartamento', 'piso'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ci' => 'Ci',
            'apellido1ro' => 'Apellido1ro',
            'apellido2do' => 'Apellido2do',
            'nombre1ro' => 'Nombre1ro',
            'nombre2do' => 'Nombre2do',
            'telefono' => 'Telefono',
            'sexo' => 'Sexo',
            'asignatura' => 'Asignatura',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'apartamento' => 'Apartamento',
            'piso' => 'Piso',
            'entre_calle' => 'Entre Calle',
            'y_calle' => 'Y Calle',
            'barrio' => 'Barrio',
        ];
    }

}
