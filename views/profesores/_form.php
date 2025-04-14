<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-profesores-preuniversitario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido1ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido2do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre1ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre2do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asignatura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apartamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entre_calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'y_calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
