<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */

$this->title = 'Añadir un nuevo estudiante';
$this->params['breadcrumbs'][] = ['label' => 'Matricula Estudiantil 10mo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-matricula-estudiantil10grado-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Los campos con asterisco son obligatorios.</p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
