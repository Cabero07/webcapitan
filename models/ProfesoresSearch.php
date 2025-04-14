<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblProfesoresPreuniversitario;

/**
 * ProfesoresSearch represents the model behind the search form of `app\models\TblProfesoresPreuniversitario`.
 */
class ProfesoresSearch extends TblProfesoresPreuniversitario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ci', 'apellido1ro', 'apellido2do', 'nombre1ro', 'nombre2do', 'telefono', 'sexo', 'asignatura', 'calle', 'numero', 'apartamento', 'piso', 'entre_calle', 'y_calle', 'barrio'], 'safe'],
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
        $query = TblProfesoresPreuniversitario::find();

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
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'apellido1ro', $this->apellido1ro])
            ->andFilterWhere(['like', 'apellido2do', $this->apellido2do])
            ->andFilterWhere(['like', 'nombre1ro', $this->nombre1ro])
            ->andFilterWhere(['like', 'nombre2do', $this->nombre2do])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'asignatura', $this->asignatura])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'apartamento', $this->apartamento])
            ->andFilterWhere(['like', 'piso', $this->piso])
            ->andFilterWhere(['like', 'entre_calle', $this->entre_calle])
            ->andFilterWhere(['like', 'y_calle', $this->y_calle])
            ->andFilterWhere(['like', 'barrio', $this->barrio]);

        return $dataProvider;
    }
}
