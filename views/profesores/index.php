<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProfesoresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profesores Preuniversitarios';
?>
<div class="container mt-4">
    <div class="row">
        <!-- Filtros en el Lado Izquierdo -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Filtros</h5>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin([
                        'method' => 'get',
                        'action' => ['index'],
                    ]); ?>

                    <!-- Filtro por Nombre -->
                    <div class="mb-3">
                        <?= $form->field($searchModel, 'nombre1ro')->textInput([
                            'placeholder' => 'Buscar por nombre',
                            'class' => 'form-control',
                        ])->label('Nombre:'); ?>
                    </div>

                    <!-- Filtro por Asignatura -->
                    <div class="mb-3">
                        <?= $form->field($searchModel, 'asignatura')->dropDownList(
                            ArrayHelper::map(app\models\TblProfesoresPreuniversitario::find()->select('asignatura')->distinct()->all(), 'asignatura', 'asignatura'),
                            ['prompt' => 'Todas las asignaturas', 'class' => 'form-control']
                        )->label('Asignatura:'); ?>
                    </div>

                    <div class="text-end">
                        <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

        <!-- Listado de Profesores en Tarjetas -->
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-primary">
                    <i class="fas fa-chalkboard-teacher"></i> <?= Html::encode($this->title) ?>
                </h1>
                <p class="text-muted">Total de Profesores: <?= $dataProvider->getTotalCount(); ?></p>
            </div>

            <div class="text-end mb-4">
                <?= Html::a('<i class="fas fa-plus"></i> Añadir un nuevo profesor', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
            </div>

            <div class="row">
                <?php foreach ($dataProvider->getModels() as $profesor): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><?= Html::encode($profesor->nombre1ro . ' ' . $profesor->apellido1ro) ?></h5>
                                <p class="card-text text-muted">
                                    <strong>Asignatura:</strong> <?= Html::encode($profesor->asignatura) ?><br>
                                    <strong>Teléfono:</strong> <?= Html::encode($profesor->telefono) ?><br>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <?= Html::a('<i class="fas fa-eye"></i> Ver', ['view', 'id' => $profesor->id], ['class' => 'btn btn-info']) ?>
                                    <?= Html::a('<i class="fas fa-edit"></i> Editar', ['update', 'id' => $profesor->id], ['class' => 'btn btn-primary']) ?>
                                    <?= Html::a('<i class="fas fa-trash"></i> Eliminar', ['delete', 'id' => $profesor->id], [
                                        'class' => 'btn btn-danger',
                                        'data-confirm' => '¿Estás seguro de eliminar este profesor?',
                                        'data-method' => 'post',
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>