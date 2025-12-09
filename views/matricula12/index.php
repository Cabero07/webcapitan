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
            <?= Html::a('<i class="fas fa-plus"></i> Añadir estudiante', ['create'], ['class' => 'btn btn-warning']) ?>
        </div>
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => ['class' => 'table-responsive'],
                'tableOptions' => ['class' => 'table table-bordered table-striped table-hover'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn', 'header' => '#'],
                    'ci',
                    'apellido1ro',
                    'apellido2do',
                    'nombre1ro',
                    'nombre2do',
                    'sexo',
                    'grupo',
                    'telefono',
                    [
                        'class' => ActionColumn::className(),
                        'header' => 'Acciones',
                        'template' => '{view} {update} {delete}',
                        'buttons' => [
                            'view' => fn($url, $model, $key) =>
                                Html::a('<i class="fas fa-eye"></i>', $url, ['class' => 'btn btn-outline-primary btn-sm','title'=>'Ver']),
                            'update' => fn($url, $model, $key) =>
                                Html::a('<i class="fas fa-edit"></i>', $url, ['class' => 'btn btn-outline-warning btn-sm','title'=>'Actualizar']),
                            'delete' => fn($url, $model, $key) =>
                                Html::a('<i class="fas fa-trash"></i>', $url, [
                                    'class' => 'btn btn-outline-danger btn-sm','title'=>'Eliminar',
                                    'data' => [
                                        'confirm' => '¿Está seguro?',
                                        'method' => 'post',
                                    ],
                                ]),
                        ],
                        'urlCreator' => fn($action, TblMatriculaEstudiantil12grado $model, $key, $index, $column) =>
                            Url::toRoute([$action, 'id' => $model->id]),
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>