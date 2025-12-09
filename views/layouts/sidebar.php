<?php

use yii\helpers\Url;

?>

<aside class="main-sidebar sidebar-dark  bd-dark elevation-4">
    <a href="<?= Url::home() ?>" class="brand-link text-center bg-dark">
        <span class="brand-text font-weight-bold text-white" style="letter-spacing:1.5px;">
            IPU Admin
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <?php
            $controller = Yii::$app->controller->id;
            $action = Yii::$app->controller->action->id;
            ?>
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link <?= ($controller == 'site' && $action == 'index') ? 'active bg-warning text-dark font-weight-bold' : '' ?>"
                       href="<?= Url::toRoute(['/site/index']); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($controller == 'site' && $action == 'dashboard') ? 'active bg-warning text-dark font-weight-bold' : '' ?>"
                       href="<?= Url::toRoute(['/site/dashboard']); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($controller == 'profesores' && $action == 'index') ? 'active bg-warning text-dark font-weight-bold' : '' ?>"
                       href="<?= Url::toRoute(['/profesores/index']); ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Profesores</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= in_array($controller, ['matricula10', 'matricula11', 'matricula12']) ? 'menu-open' : '' ?>">
                    <a class="nav-link <?= in_array($controller, ['matricula10', 'matricula11', 'matricula12']) ? 'active bg-warning text-dark font-weight-bold' : '' ?>"
                       href="#">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Grupos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link <?= ($controller == 'matricula12' && $action == 'index') ? 'active bg-primary text-white' : '' ?>"
                               href="<?= Url::toRoute(['/matricula12/index']); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gestionar 12.°</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($controller == 'matricula11' && $action == 'index') ? 'active bg-primary text-white' : '' ?>"
                               href="<?= Url::toRoute(['/matricula11/index']); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gestionar 11.°</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($controller == 'matricula10' && $action == 'index') ? 'active bg-primary text-white' : '' ?>"
                               href="<?= Url::toRoute(['/matricula10/index']); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gestionar 10.°</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>