<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil12grado $model */

$this->title = 'Actualizar Matrícula Estudiantíl 12mo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl 12mo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tbl-matricula-estudiantil12grado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
