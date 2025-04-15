<?php

use yii\helpers\Html;

?>
<div class="d-flex justify-content-center align-items-center vh-100" ">
    <div class="card shadow-lg" style="width: 360px; border-radius: 10px; overflow: hidden;">
        <div class="card-header text-center" style="background-color: #007bff; color: white;">
            <h4 class="mb-0">Bienvenido</h4>
        </div>
        <div class="card-body login-card-body">
            <p class="text-center text-muted">Por favor, inicia sesión</p>
            
            <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>

            <?= $form->field($model, 'username', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>',
                'template' => '{beginWrapper}{input}{error}{endWrapper}',
                'wrapperOptions' => ['class' => 'input-group mb-3']
            ])
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

            <?= $form->field($model, 'password', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>',
                'template' => '{beginWrapper}{input}{error}{endWrapper}',
                'wrapperOptions' => ['class' => 'input-group mb-3']
            ])
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

            <div class="row">
                <div class="col-12">
                    <?= Html::submitButton('Acceder', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            </div>

            <?php \yii\bootstrap4\ActiveForm::end(); ?>
        </div>

    </div>
</div>