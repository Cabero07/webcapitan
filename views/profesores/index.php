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
        <!-- Filtros -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-filter"></i> Filtros
                    </h5>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin([
                        'method' => 'get',
                        'action' => ['index'],
                    ]); ?>

                    <?= $form->field($searchModel, 'nombre1ro')->textInput([
                        'placeholder' => 'Buscar por nombre',
                    ])->label('Nombre') ?>

                    <?= $form->field($searchModel, 'asignatura')->dropDownList(
                        ArrayHelper::map(
                            app\models\TblProfesoresPreuniversitario::find()->select('asignatura')->distinct()->where(['not', ['asignatura' => null]])->orderBy('asignatura ASC')->all(),
                            'asignatura', 'asignatura'
                        ),
                        ['prompt' => 'Todas las asignaturas']
                    )->label('Asignatura') ?>

                    <div class="d-grid mt-3">
                        <?= Html::submitButton('<i class="fas fa-search"></i> Filtrar', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <!-- Listado de profesores -->
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-primary">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <?= Html::encode($this->title) ?>
                </h2>
                <span class="text-muted">Total: <?= $dataProvider->getTotalCount(); ?></span>
            </div>
            <div class="mb-4 text-end">
                <?= Html::a('<i class="fas fa-plus"></i> Nuevo Profesor', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="row">
                <?php foreach ($dataProvider->getModels() as $profesor): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-light text-primary fw-bold">
                                <i class="fas fa-user-tie"></i>
                                <?= Html::encode($profesor->nombre1ro . ' ' . $profesor->apellido1ro) ?>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush mb-2">
                                    <?php if ($profesor->asignatura): ?>
                                    <li class="list-group-item"><i class="fas fa-book"></i> <strong>Asignatura:</strong> <?= Html::encode($profesor->asignatura) ?></li>
                                    <?php endif; ?>
                                    <?php if ($profesor->telefono): ?>
                                    <li class="list-group-item"><i class="fas fa-phone"></i> <strong>Teléfono:</strong> <?= Html::encode($profesor->telefono) ?></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-end">
                                <?= Html::a('<i class="fas fa-eye"></i> Ver', ['view', 'id' => $profesor->id], ['class' => 'btn btn-info btn-sm me-1']) ?>
                                <?= Html::a('<i class="fas fa-edit"></i> Editar', ['update', 'id' => $profesor->id], ['class' => 'btn btn-primary btn-sm me-1']) ?>
                                <?= Html::a('<i class="fas fa-trash"></i> Eliminar', ['delete', 'id' => $profesor->id], [
                                    'class' => 'btn btn-danger btn-sm',
                                    'data-confirm' => '¿Está seguro de eliminar este profesor?',
                                    'data-method' => 'post',
                                ]) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if ($dataProvider->getTotalCount() === 0): ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center"><i class="fas fa-info-circle"></i> No hay profesores registrados aún.</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>