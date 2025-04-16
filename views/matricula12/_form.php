<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-matricula-estudiantil12grado-form container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-user-edit"></i> Formulario de Matrícula - 12mo Grado</h5>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(['options' => ['class' => 'needs-validation']]); ?>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'ci')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'apellido1ro')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'apellido2do')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'nombre1ro')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'nombre2do')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'sexo')->dropDownList(['M' => 'Masculino', 'F' => 'Femenino'], ['prompt' => 'Seleccione...', 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'color_piel')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'proc_soc_padre')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'proc_soc_madre')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'calle')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'numero')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'apartamento')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'piso')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'entre_calle')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'y_calle')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'municipio')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'consejo_popular')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'tomo')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'folio')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'numero_matricula')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'grado')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'grupo')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'deficiencias')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'activo')->checkbox(['class' => 'form-check-input']) ?>
                </div>
            </div>

            <div class="form-group mt-3">
                <?= Html::submitButton('<i class="fas fa-save"></i> Guardar', ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fas fa-arrow-left"></i> Cancelar', ['index'], ['class' => 'btn btn-secondary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>