<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil12grado $model */

$this->title = 'Añadir un nuevo estudiante';
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl 12grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-matricula-estudiantil12grado-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
