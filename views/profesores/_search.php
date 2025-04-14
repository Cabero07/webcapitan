<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProfesoresSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-profesores-preuniversitario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ci') ?>

    <?= $form->field($model, 'apellido1ro') ?>

    <?= $form->field($model, 'apellido2do') ?>

    <?= $form->field($model, 'nombre1ro') ?>

    <?php // echo $form->field($model, 'nombre2do') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'asignatura') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'apartamento') ?>

    <?php // echo $form->field($model, 'piso') ?>

    <?php // echo $form->field($model, 'entre_calle') ?>

    <?php // echo $form->field($model, 'y_calle') ?>

    <?php // echo $form->field($model, 'barrio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
