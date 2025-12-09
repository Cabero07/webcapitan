<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = 'Añadir un nuevo profesor';
$this->params['breadcrumbs'][] = ['label' => 'Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="fas fa-user-plus"></i> <?= Html::encode($this->title) ?>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>