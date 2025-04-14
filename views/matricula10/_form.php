<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-matricula-estudiantil10grado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido1ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido2do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre1ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre2do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color_piel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proc_soc_padre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proc_soc_madre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apartamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entre_calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'y_calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consejo_popular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tomo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'folio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deficiencias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
