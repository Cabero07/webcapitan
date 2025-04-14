<?php

use app\models\TblProfesoresPreuniversitario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProfesoresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profesores Preuniversitarios';
?>
<div class="tbl-profesores-preuniversitario-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Añadir un nuevo profesor', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'ci',
            'apellido1ro',
            'apellido2do',
            'nombre1ro',
            'nombre2do',
            'telefono',
            //'sexo',
            'asignatura',
            //'calle',
            //'numero',
            //'apartamento',
            //'piso',
            //'entre_calle',
            //'y_calle',
            //'barrio',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblProfesoresPreuniversitario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
