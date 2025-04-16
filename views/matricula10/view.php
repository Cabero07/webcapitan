<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */

$this->title = "Detalles del Estudiante: " . $model->ci;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantil - 10mo Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-matricula-estudiantil10grado-view container mt-4">
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
                    'nombre2do',
                    'telefono',
                    'sexo',
                    'grado',
                    'grupo',
                ],
            ]) ?>
        </div>
    </div>
</div>