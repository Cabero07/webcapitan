<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil12grado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="container mt-4">
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            <i class="fas fa-user-plus"></i>
            <?= $model->isNewRecord ? 'Registrar Estudiante 12mo Grado' : 'Editar Matrícula Estudiante 12mo Grado' ?>
        </h5>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(['options' => ['autocomplete'=>'off']]); ?>

        <!-- Datos personales -->
        <fieldset class="mb-4">
            <legend class="text-primary">Datos Personales</legend>
            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'ci')->textInput(['maxlength'=>20]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'apellido1ro')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'apellido2do')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'nombre1ro')->textInput(['maxlength'=>50]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'nombre2do')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'telefono')->textInput(['maxlength'=>15]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'sexo')->dropDownList(['M'=>'Masculino','F'=>'Femenino'],['prompt'=>'Seleccione...']) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'color_piel')->textInput(['maxlength'=>20]) ?></div>
            </div>
        </fieldset>

        <!-- Procedencia social familiar -->
        <fieldset class="mb-4">
            <legend class="text-primary">Procedencia social familiar</legend>
            <div class="row">
                <div class="col-md-6"><?= $form->field($model, 'proc_soc_padre')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-6"><?= $form->field($model, 'proc_soc_madre')->textInput(['maxlength'=>50]) ?></div>
            </div>
        </fieldset>

        <!-- Dirección -->
        <fieldset class="mb-4">
            <legend class="text-primary">Dirección</legend>
            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'calle')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'numero')->textInput(['maxlength'=>10]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'apartamento')->textInput(['maxlength'=>10]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'piso')->textInput(['maxlength'=>10]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'barrio')->textInput(['maxlength'=>50]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'entre_calle')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'y_calle')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'municipio')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'consejo_popular')->textInput(['maxlength'=>50]) ?></div>
            </div>
        </fieldset>

        <!-- Datos de matrícula -->
        <fieldset class="mb-4">
            <legend class="text-primary">Datos de Matrícula</legend>
            <div class="row">
                <div class="col-md-2"><?= $form->field($model, 'tomo')->textInput(['maxlength'=>10]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'folio')->textInput(['maxlength'=>10]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'numero_matricula')->textInput(['maxlength'=>20]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'grado')->textInput(['maxlength'=>20,'value'=>'12'])?></div>
                <div class="col-md-3"><?= $form->field($model, 'grupo')->textInput(['maxlength'=>10]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-6"><?= $form->field($model, 'deficiencias')->textInput(['maxlength'=>50]) ?></div>
                <div class="col-md-6">
                    <?= $form->field($model, 'activo')->dropDownList(['1' => 'Sí', '0' => 'No'], ['prompt'=>'Seleccione...']) ?>
                </div>
            </div>
        </fieldset>

        <div class="mt-4">
            <?= Html::submitButton(
                $model->isNewRecord ? '<i class="fas fa-save"></i> Registrar Estudiante' : '<i class="fas fa-save"></i> Guardar Cambios',
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
            <?= Html::a('<i class="fas fa-arrow-left"></i> Cancelar', ['index'], ['class'=>'btn btn-secondary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>