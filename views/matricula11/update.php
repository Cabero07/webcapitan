<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil11grado $model */

$this->title = 'Editar estudiante: ' . $model->ci;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl - 11no Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ci, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="container mt-4">
    <?= $this->render('_form', ['model'=>$model]) ?>
</div>