<?php

use app\models\TblMatriculaEstudiantil12grado;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Matricula12Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matrícula Estudiantíl - 12mo Grado';
?>
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-users"></i> <?= Html::encode($this->title) ?></h4>
            <?= Html::a('<i class="fas fa-plus"></i> Añadir un nuevo estudiante', ['create'], ['class' => 'btn btn-warning']) ?>
        </div>
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => ['class' => 'table-responsive'],
                'tableOptions' => ['class' => 'table table-bordered table-striped table-hover'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn', 'header' => '#'],
                    [
                        'attribute' => 'ci',
                        'label' => 'CI',
                        'headerOptions' => ['style' => 'width:120px; text-align:center;'],
                        'contentOptions' => ['style' => 'text-align:center;'],
                    ],
                    [
                        'attribute' => 'apellido1ro',
                        'label' => 'Primer Apellido',
                    ],
                    [
                        'attribute' => 'apellido2do',
                        'label' => 'Segundo Apellido',
                    ],
                    [
                        'attribute' => 'nombre1ro',
                        'label' => 'Primer Nombre',
                    ],
                    [
                        'attribute' => 'nombre2do',
                        'label' => 'Segundo Nombre',
                    ],
                    [
                        'attribute' => 'grupo',
                        'headerOptions' => ['style' => 'width:80px; text-align:center;'],
                        'contentOptions' => ['style' => 'text-align:center;'],
                    ],
                    [
                        'attribute' => 'telefono',
                        'headerOptions' => ['style' => 'width:150px; text-align:center;'],
                        'contentOptions' => ['style' => 'text-align:center;'],
                    ],
                    [
                        'class' => ActionColumn::className(),
                        'header' => 'Acciones',
                        'template' => '{view} {update} {delete}',
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a('<i class="fas fa-eye"></i>', $url, [
                                    'class' => 'btn btn-outline-primary btn-sm',
                                    'title' => 'Ver detalles',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('<i class="fas fa-edit"></i>', $url, [
                                    'class' => 'btn btn-outline-warning btn-sm',
                                    'title' => 'Actualizar',
                                ]);
                            },
                            'delete' => function ($url, $model, $key) {
                                return Html::a('<i class="fas fa-trash"></i>', $url, [
                                    'class' => 'btn btn-outline-danger btn-sm',
                                    'title' => 'Eliminar',
                                    'data' => [
                                        'confirm' => '¿Estás seguro de que deseas eliminar este estudiante?',
                                        'method' => 'post',
                                    ],
                                ]);
                            },
                        ],
                        'urlCreator' => function ($action, TblMatriculaEstudiantil12grado $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        },
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>