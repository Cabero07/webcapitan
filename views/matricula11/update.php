<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil11grado $model */

$this->title = 'Update Tbl Matricula Estudiantil11grado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Matricula Estudiantil11grados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-matricula-estudiantil11grado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
