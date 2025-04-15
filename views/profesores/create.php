<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = 'Añadir un nuevo profesor';
$this->params['breadcrumbs'][] = ['label' => 'Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-profesores-preuniversitario-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
