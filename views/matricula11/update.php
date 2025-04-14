<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil11grado $model */

$this->title = 'Actualizar Matrícula Estudiantíl 11no: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantil 11no', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'actualizar';
?>
<div class="tbl-matricula-estudiantil11grado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
