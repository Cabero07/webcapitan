<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = $model->nombre1ro . ' ' . $model->apellido1ro;
$this->params['breadcrumbs'][] = ['label' => 'Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-user"></i> <?= Html::encode($this->title) ?></h4>
            <div>
                <?= Html::a('<i class="fas fa-edit"></i> Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
                <?= Html::a('<i class="fas fa-trash"></i> Eliminar', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => '¿Estás seguro de que deseas eliminar este profesor?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'options' => ['class' => 'table table-bordered table-hover'],
                'attributes' => [
                    [
                        'label' => 'CI',
                        'value' => $model->ci,
                    ],
                    [
                        'label' => 'Nombre Completo',
                        'value' => $model->nombre1ro . ' ' . $model->nombre2do . ' ' . $model->apellido1ro . ' ' . $model->apellido2do,
                    ],
                    [
                        'label' => 'Teléfono',
                        'value' => $model->telefono,
                    ],
                    [
                        'label' => 'Género',
                        'value' => $model->sexo,
                    ],
                    [
                        'label' => 'Asignatura',
                        'value' => $model->asignatura,
                    ],
                    [
                        'label' => 'Dirección',
                        'value' => $model->calle . ' #' . $model->numero . ', Apartamento: ' . $model->apartamento . ', Piso: ' . $model->piso . ', Barrio: ' . $model->barrio,
                    ],
                    [
                        'label' => 'Entre Calles',
                        'value' => $model->entre_calle . ' y ' . $model->y_calle,
                    ],
                ],
            ]) ?>
        </div>

    </div>
</div>