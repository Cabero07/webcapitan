<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */

$this->title = "Detalles del Estudiante: " . $model->ci;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantil - 11no Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-matricula-estudiantil11grado-view container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-user"></i> <?= Html::encode($this->title) ?></h5>
        </div>
        <div class="card-body">
            <p>
                <?= Html::a('<i class="fas fa-edit"></i> Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
                <?= Html::a('<i class="fas fa-trash"></i> Eliminar', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => '¿Estás seguro de que deseas eliminar este estudiante?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'ci',
                    'apellido1ro',
                    'apellido2do',
                    'nombre1ro',
                    [
                        'attribute' => 'nombre2do',
                        'value' => $model->nombre2do ?? 'N/A',
                    ],
                    [
                        'attribute' => 'telefono',
                        'value' => $model->telefono ?? 'N/A',
                    ],
                    'sexo',
                    [
                        'attribute' => 'color_piel',
                        'value' => $model->color_piel ?? 'N/A',
                    ],
                    [
                        'attribute' => 'proc_soc_padre',
                        'value' => $model->proc_soc_padre ?? 'N/A',
                    ],
                    [
                        'attribute' => 'proc_soc_madre',
                        'value' => $model->proc_soc_madre ?? 'N/A',
                    ],
                    [
                        'attribute' => 'calle',
                        'value' => $model->calle ?? 'N/A',
                    ],
                    [
                        'attribute' => 'numero',
                        'value' => $model->numero ?? 'N/A',
                    ],
                    [
                        'attribute' => 'apartamento',
                        'value' => $model->apartamento ?? 'N/A',
                    ],
                    [
                        'attribute' => 'piso',
                        'value' => $model->piso ?? 'N/A',
                    ],
                    [
                        'attribute' => 'entre_calle',
                        'value' => $model->entre_calle ?? 'N/A',
                    ],
                    [
                        'attribute' => 'y_calle',
                        'value' => $model->y_calle ?? 'N/A',
                    ],
                    [
                        'attribute' => 'barrio',
                        'value' => $model->barrio ?? 'N/A',
                    ],
                    'municipio',
                    [
                        'attribute' => 'consejo_popular',
                        'value' => $model->consejo_popular ?? 'N/A',
                    ],
                    [
                        'attribute' => 'tomo',
                        'value' => $model->tomo ?? 'N/A',
                    ],
                    [
                        'attribute' => 'folio',
                        'value' => $model->folio ?? 'N/A',
                    ],
                    'numero_matricula',
                    'grado',
                    [
                        'attribute' => 'grupo',
                        'value' => $model->grupo ?? 'N/A',
                    ],
                    [
                        'attribute' => 'deficiencias',
                        'value' => $model->deficiencias ?? 'N/A',
                    ],
                    [
                        'attribute' => 'activo',
                        'value' => $model->activo ? 'Sí' : 'No',
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>