<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = 'Actualizar Profesores Preuniversitario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tbl-profesores-preuniversitario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
