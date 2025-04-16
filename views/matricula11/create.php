<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil11grado $model */

$this->title = 'Añadir un nuevo estudiante';
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl 11grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-matricula-estudiantil11grado-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
