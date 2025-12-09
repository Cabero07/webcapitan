<?php

use yii\helpers\Html;

?>
<nav class="main-header navbar navbar-expand navbar-dark shadow-sm rounded">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id='hamburger' data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>
    <span class="mx-auto h4 mb-0 font-weight-bold text-warning" style="letter-spacing:1px;">
        IPU "Capitán Roberto Rodríguez"
    </span>
    <?php if (!Yii::$app->user->isGuest): ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']) ?>
                <?= Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link nav-link text-white font-weight-bold']
                ) ?>
                <?= Html::endForm() ?>
            </li>
        </ul>
    <?php endif; ?>
</nav>