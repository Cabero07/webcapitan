<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */

$this->title = 'Actualizar Matrícula Estudiantíl 10mo ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl 10mo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tbl-matricula-estudiantil10grado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
