<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_matricula_estudiantil_12grado".
 *
 * @property int $id
 * @property string $ci
 * @property string $apellido1ro
 * @property string $apellido2do
 * @property string $nombre1ro
 * @property string|null $nombre2do
 * @property string|null $telefono
 * @property string $sexo
 * @property string|null $color_piel
 * @property string|null $proc_soc_padre
 * @property string|null $proc_soc_madre
 * @property string|null $calle
 * @property string|null $numero
 * @property string|null $apartamento
 * @property string|null $piso
 * @property string|null $entre_calle
 * @property string|null $y_calle
 * @property string|null $barrio
 * @property string $municipio
 * @property string|null $consejo_popular
 * @property string|null $tomo
 * @property string|null $folio
 * @property string $numero_matricula
 * @property string $grado
 * @property string|null $grupo
 * @property string|null $deficiencias
 * @property int $activo
 */
class TblMatriculaEstudiantil12grado extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_matricula_estudiantil_12grado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre2do', 'telefono', 'color_piel', 'proc_soc_padre', 'proc_soc_madre', 'calle', 'numero', 'apartamento', 'piso', 'entre_calle', 'y_calle', 'barrio', 'consejo_popular', 'tomo', 'folio', 'grupo', 'deficiencias'], 'default', 'value' => null],
            [['activo'], 'default', 'value' => 1],
            [['ci', 'apellido1ro', 'apellido2do', 'nombre1ro', 'sexo', 'municipio', 'numero_matricula', 'grado'], 'required'],
            [['activo'], 'integer'],
            [['ci', 'color_piel', 'numero_matricula', 'grado'], 'string', 'max' => 20],
            [['apellido1ro', 'apellido2do', 'nombre1ro', 'nombre2do', 'proc_soc_padre', 'proc_soc_madre', 'calle', 'entre_calle', 'y_calle', 'barrio', 'municipio', 'consejo_popular', 'deficiencias'], 'string', 'max' => 50],
            [['telefono'], 'string', 'max' => 15],
            [['sexo', 'numero', 'apartamento', 'piso', 'tomo', 'folio', 'grupo'], 'string', 'max' => 10],
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
            'color_piel' => 'Color Piel',
            'proc_soc_padre' => 'Proc Soc Padre',
            'proc_soc_madre' => 'Proc Soc Madre',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'apartamento' => 'Apartamento',
            'piso' => 'Piso',
            'entre_calle' => 'Entre Calle',
            'y_calle' => 'Y Calle',
            'barrio' => 'Barrio',
            'municipio' => 'Municipio',
            'consejo_popular' => 'Consejo Popular',
            'tomo' => 'Tomo',
            'folio' => 'Folio',
            'numero_matricula' => 'Numero Matricula',
            'grado' => 'Grado',
            'grupo' => 'Grupo',
            'deficiencias' => 'Deficiencias',
            'activo' => 'Activo',
        ];
    }

}
