<?php

use app\models\TblMatriculaEstudiantil10grado;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Matricula10Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matrícula Estudiantíl 10mo grado';
?>
<div class="tbl-matricula-estudiantil10grado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Html::a('Añadir un nuevo estudiante', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ci',
            'apellido1ro',
            'apellido2do',
            'nombre1ro',
            'nombre2do',
            'telefono',
            //'sexo',
            //'color_piel',
            //'proc_soc_padre',
            //'proc_soc_madre',
            //'calle',
            //'numero',
            //'apartamento',
            //'piso',
            //'entre_calle',
            //'y_calle',
            //'barrio',
            //'municipio',
            //'consejo_popular',
            //'tomo',
            //'folio',
            //'numero_matricula',
            //'grado',
            'grupo',
            //'deficiencias',
            //'activo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMatriculaEstudiantil10grado $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
