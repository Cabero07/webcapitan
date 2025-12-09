<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TblProfesoresPreuniversitario;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<?php
// Asegurar asignaturas disponibles: si la BD está vacía, ofrecer opciones predeterminadas
$asignaturas = ArrayHelper::map(
    TblProfesoresPreuniversitario::find()->select('asignatura')->distinct()->where(['not', ['asignatura' => null]])->orderBy('asignatura ASC')->all(),
    'asignatura',
    'asignatura'
);
if (count($asignaturas) === 0) {
    $asignaturas = [
        'Matemática' => 'Matemática',
        'Física' => 'Física',
        'Química' => 'Química',
        'Historia' => 'Historia',
        'Lengua Española' => 'Lengua Española',
        'Informática' => 'Informática'
    ];
}
?>

<?php $form = ActiveForm::begin([
    'options' => ['autocomplete'=>'off'],
]); ?>
<div class="row">
    <div class="col-md-6">
        <!-- CI -->
        <?= $form->field($model, 'ci')->textInput([
            'maxlength' => true,
            'placeholder' => 'CI del profesor',
        ]) ?>
    </div>
    <div class="col-md-6">
        <!-- Género -->
        <?= $form->field($model, 'sexo')->dropDownList([
            'Masculino' => 'Masculino',
            'Femenino' => 'Femenino'
        ], ['prompt'=>'Seleccione']) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'apellido1ro')->textInput([
            'maxlength' => true,
            'placeholder' => 'Primer apellido',
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'apellido2do')->textInput([
            'maxlength' => true,
            'placeholder' => 'Segundo apellido',
        ]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'nombre1ro')->textInput([
            'maxlength' => true,
            'placeholder' => 'Primer nombre',
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'nombre2do')->textInput([
            'maxlength' => true,
            'placeholder' => 'Segundo nombre (opcional)',
        ]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'telefono')->textInput([
            'maxlength' => true,
            'placeholder' => 'Número de teléfono',
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'asignatura')->dropDownList(
            $asignaturas,
            ['prompt' => 'Seleccione la asignatura']
        ) ?>
    </div>
</div>
<!-- Dirección -->
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'calle')->textInput(['maxlength'=>true,'placeholder'=>'Calle']) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'numero')->textInput(['maxlength'=>true,'placeholder'=>'Número']) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'barrio')->textInput(['maxlength'=>true,'placeholder'=>'Barrio']) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'apartamento')->textInput(['maxlength'=>true,'placeholder'=>'Apartamento']) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'piso')->textInput(['maxlength'=>true,'placeholder'=>'Piso']) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'telefono')->textInput(['maxlength'=>true,'placeholder'=>'Teléfono']) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'entre_calle')->textInput(['maxlength'=>true,'placeholder'=>'Entre calle']) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'y_calle')->textInput(['maxlength'=>true,'placeholder'=>'Y calle']) ?>
    </div>
</div>
<div class="mt-4">
    <?= Html::submitButton(
        $model->isNewRecord ? '<i class="fas fa-save"></i> Crear profesor' : '<i class="fas fa-save"></i> Guardar cambios',
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    ) ?>
</div>
<?php ActiveForm::end(); ?>