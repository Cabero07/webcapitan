<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = 'Añadir un nuevo profesor';
$this->params['breadcrumbs'][] = ['label' => 'Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-profesores-preuniversitario-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Los campos con asterisco son obligatorios.</p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
