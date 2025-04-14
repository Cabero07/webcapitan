<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblMatriculaEstudiantil11grado;

/**
 * Matricula11Search represents the model behind the search form of `app\models\TblMatriculaEstudiantil11grado`.
 */
class Matricula11Search extends TblMatriculaEstudiantil11grado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'activo'], 'integer'],
            [['ci', 'apellido1ro', 'apellido2do', 'nombre1ro', 'nombre2do', 'telefono', 'sexo', 'color_piel', 'proc_soc_padre', 'proc_soc_madre', 'calle', 'numero', 'apartamento', 'piso', 'entre_calle', 'y_calle', 'barrio', 'municipio', 'consejo_popular', 'tomo', 'folio', 'numero_matricula', 'grado', 'grupo', 'deficiencias'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = TblMatriculaEstudiantil11grado::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'apellido1ro', $this->apellido1ro])
            ->andFilterWhere(['like', 'apellido2do', $this->apellido2do])
            ->andFilterWhere(['like', 'nombre1ro', $this->nombre1ro])
            ->andFilterWhere(['like', 'nombre2do', $this->nombre2do])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'color_piel', $this->color_piel])
            ->andFilterWhere(['like', 'proc_soc_padre', $this->proc_soc_padre])
            ->andFilterWhere(['like', 'proc_soc_madre', $this->proc_soc_madre])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'apartamento', $this->apartamento])
            ->andFilterWhere(['like', 'piso', $this->piso])
            ->andFilterWhere(['like', 'entre_calle', $this->entre_calle])
            ->andFilterWhere(['like', 'y_calle', $this->y_calle])
            ->andFilterWhere(['like', 'barrio', $this->barrio])
            ->andFilterWhere(['like', 'municipio', $this->municipio])
            ->andFilterWhere(['like', 'consejo_popular', $this->consejo_popular])
            ->andFilterWhere(['like', 'tomo', $this->tomo])
            ->andFilterWhere(['like', 'folio', $this->folio])
            ->andFilterWhere(['like', 'numero_matricula', $this->numero_matricula])
            ->andFilterWhere(['like', 'grado', $this->grado])
            ->andFilterWhere(['like', 'grupo', $this->grupo])
            ->andFilterWhere(['like', 'deficiencias', $this->deficiencias]);

        return $dataProvider;
    }
}
