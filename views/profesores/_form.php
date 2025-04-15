<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-profesores-preuniversitario-form container mt-5">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'needs-validation', 'novalidate' => true], // Bootstrap validation classes
    ]); ?>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fas fa-user-plus"></i> Registrar un Nuevo Profesor</h4>
        </div>
        <div class="card-body">

            <!-- Sección: Información Personal -->
            <fieldset>
                <legend class="text-primary"><i class="fas fa-id-badge"></i> Información Personal</legend>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'ci')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el CI del profesor',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-id-card text-muted"></i> CI <span class="text-danger">*</span>', ['class' => 'form-label']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'apellido1ro')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el primer apellido',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-user text-muted"></i> Primer Apellido <span class="text-danger">*</span>', ['class' => 'form-label']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'apellido2do')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el segundo apellido',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-user text-muted"></i> Segundo Apellido <span class="text-danger">*</span>', ['class' => 'form-label']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'nombre1ro')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el primer nombre',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-user text-muted"></i> Primer Nombre <span class="text-danger">*</span>', ['class' => 'form-label']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'nombre2do')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el segundo nombre',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-user text-muted"></i> Segundo Nombre', ['class' => 'form-label']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'sexo')->dropDownList([
                            'Masculino' => 'Masculino',
                            'Femenino' => 'Femenino',
                        ], [
                            'prompt' => 'Seleccione el género',
                            'class' => 'form-select',
                        ])->label('<i class="fas fa-venus-mars text-muted"></i> Género <span class="text-danger">*</span>', ['class' => 'form-label']) ?>
                    </div>
                </div>
            </fieldset>

            <!-- Sección: Contacto -->
            <fieldset class="mt-4">
                <legend class="text-primary"><i class="fas fa-phone-alt"></i> Contacto</legend>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'telefono')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el número de teléfono',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-phone text-muted"></i> Teléfono', ['class' => 'form-label']) ?>
                    </div>
                </div>
            </fieldset>

            <!-- Sección: Dirección -->
            <fieldset class="mt-4">
                <legend class="text-primary"><i class="fas fa-map-marker-alt"></i> Dirección</legend>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'calle')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese la calle',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-road text-muted"></i> Calle', ['class' => 'form-label']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'numero')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Número de la casa',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-hashtag text-muted"></i> Número', ['class' => 'form-label']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'barrio')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Ingrese el barrio',
                            'class' => 'form-control',
                        ])->label('<i class="fas fa-warehouse text-muted"></i> Barrio', ['class' => 'form-label']) ?>
                    </div>
                </div>
            </fieldset>

        </div>
        <div class="card-footer text-center">
            <?= Html::submitButton('<i class="fas fa-save"></i> Registrar Profesor', ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>