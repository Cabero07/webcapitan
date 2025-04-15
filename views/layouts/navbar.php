<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id='hamburger' data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <h2>IPU "Capitán Roberto Rodríguez"</h2>

    <?php if (!Yii::$app->user->isGuest): ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']) ?>
                <?= Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link nav-link logout']
                ) ?>
                <?= Html::endForm() ?>
            </li>
        </ul>
    <?php endif; ?>
</nav>
<!-- /.navbar -->


<?php
    /*<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
    </li>*/
?>