<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Matricula10Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-matricula-estudiantil10grado-search">

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

    <?php // echo $form->field($model, 'color_piel') ?>

    <?php // echo $form->field($model, 'proc_soc_padre') ?>

    <?php // echo $form->field($model, 'proc_soc_madre') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'apartamento') ?>

    <?php // echo $form->field($model, 'piso') ?>

    <?php // echo $form->field($model, 'entre_calle') ?>

    <?php // echo $form->field($model, 'y_calle') ?>

    <?php // echo $form->field($model, 'barrio') ?>

    <?php // echo $form->field($model, 'municipio') ?>

    <?php // echo $form->field($model, 'consejo_popular') ?>

    <?php // echo $form->field($model, 'tomo') ?>

    <?php // echo $form->field($model, 'folio') ?>

    <?php // echo $form->field($model, 'numero_matricula') ?>

    <?php // echo $form->field($model, 'grado') ?>

    <?php // echo $form->field($model, 'grupo') ?>

    <?php // echo $form->field($model, 'deficiencias') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
