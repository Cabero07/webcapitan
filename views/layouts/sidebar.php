<?php

use yii\helpers\Url;

?>

<aside class="main-sidebar sidebar-dark-warning elevation-4" style="z-index: 1040 !important;">
    <!-- Logo de la aplicación -->
    <a href="<?= Url::home() ?>" class="brand-link logo-switch">
        <img src="/basic/web/logo-mini.png" alt="Logo" class="brand-image-xl logo-xs">
        <img src="/basic/web/logo.png" alt="Logo" class="brand-image-xs logo-xl" style="left: 12px">
        </br>
    </a>

    <!-- Barra lateral (Sidebar) -->
    <div class="sidebar">
        <!-- Menú de la barra lateral -->
        <nav class="mt-2">
            <?php
            // Obtener el controlador y la acción actual para evaluar cuál menú debe estar activo
            $controller = Yii::$app->controller->id;
            $action = Yii::$app->controller->action->id;
            ?>

            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">



                <!------- MENU PRINCIPAL ------->
                <?php
                // Activar la sección Inicio solo para la acción "index"
                $liInicio = ($controller == 'site' && $action == 'index') ? 'nav-item active' : 'nav-item';
                $aInicio = ($controller == 'site' && $action == 'index') ? 'nav-link active' : 'nav-link';

                // Activar la sección Profesores solo para la acción "about"
                $liProfesores = ($controller == 'profesores' && $action == 'index') ? 'nav-item active' : 'nav-item';
                $aProfesores = ($controller == 'profesores' && $action == 'index') ? 'nav-link active' : 'nav-link';
                ?>
                <li class="<?= $liInicio ?>">
                    <a class="<?= $aInicio ?>" href="<?= Url::toRoute(['/site/index']); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>

                <!------- DASHBOARD ------->
                <?php
                // Lógica para determinar si el Dashboard está activo
                $liDashboard = ($controller == 'site' && $action == 'dashboard') ? 'nav-item active' : 'nav-item';
                $aDashboard = ($controller == 'site' && $action == 'dashboard') ? 'nav-link active' : 'nav-link';
                ?>
                <li class="<?= $liDashboard ?>">
                    <a class="<?= $aDashboard ?>" href="<?= Url::toRoute(['/site/dashboard']); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!------- DASHBOARD END ------->

                <li class="<?= $liProfesores ?>">
                    <a class="<?= $aProfesores ?>" href="<?= Url::toRoute(['/profesores/index']); ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Profesores</p>
                    </a>
                </li>


                <!------- MENU Grupos ------->
                <?php
                // Activar el menú Usuarios si el controlador pertenece a "users", "route", etc.
                $liAdmin = in_array($controller, ['matricula10', 'matricula11', 'matricula12']) ? 'nav-item has-treeview active menu-open' : 'nav-item has-treeview';
                $aAdmin = in_array($controller, ['matricula10', 'matricula11', 'matricula12']) ? 'nav-link active' : 'nav-link';
                ?>
                <li class="<?= $liAdmin ?>">
                    <a class="<?= $aAdmin ?>" href="#">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Grupos<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!----------------------------->
                        <?php
                        // Submenú "Gestionar Usuarios"
                        /*$liUsers = ($controller == 'users' && $action == 'index') ? 'nav-item active' : 'nav-item';
                        $aUsers = ($controller == 'users' && $action == 'index') ? 'nav-link active' : 'nav-link';
                        
                        ?>
                        <li class="<?= $liUsers ?>">
                            <a class="<?= $aUsers ?>" href="<?= Url::toRoute(['/users/index']); ?>">
                                <i class="nav-icon far fa-circle text-yellow"></i>
                                <p>Gestionar Usuarios</p>
                            </a>
                        </li> 
                        */
                        ?>
                        <!----------------------------->


                        <?php
                        // Submenú "Gestionar 12.°"
                        $liUsers = ($controller == 'matricula12' && $action == 'index') ? 'nav-item active' : 'nav-item';
                        $aUsers = ($controller == 'matricula12' && $action == 'index') ? 'nav-link active' : 'nav-link';
                        ?>
                        <li class="<?= $liUsers ?>">
                            <a class="<?= $aUsers ?>" href="<?= Url::toRoute(['/matricula12/index']); ?>">
                                <i class="nav-icon far fa-circle text-yellow"></i>
                                <p>Gestionar 12.°</p>
                            </a>
                        </li>
                        <?php
                        // Submenú "Gestionar 11.°"
                        $liUsers = ($controller == 'matricula11' && $action == 'index') ? 'nav-item active' : 'nav-item';
                        $aUsers = ($controller == 'matricula11' && $action == 'index') ? 'nav-link active' : 'nav-link';
                        ?>
                        <li class="<?= $liUsers ?>">
                            <a class="<?= $aUsers ?>" href="<?= Url::toRoute(['/matricula11/index']); ?>">
                                <i class="nav-icon far fa-circle text-yellow"></i>
                                <p>Gestionar 11.°</p>
                            </a>
                        </li>
                        <?php
                        // Submenú "Gestionar 10.°"
                        $liUsers = ($controller == 'matricula10' && $action == 'index') ? 'nav-item active' : 'nav-item';
                        $aUsers = ($controller == 'matricula10' && $action == 'index') ? 'nav-link active' : 'nav-link';
                        ?>
                        <li class="<?= $liUsers ?>">
                            <a class="<?= $aUsers ?>" href="<?= Url::toRoute(['/matricula10/index']); ?>">
                                <i class="nav-icon far fa-circle text-yellow"></i>
                                <p>Gestionar 10.°</p>
                            </a>
                        </li>
                        <!----------------------------->

                    </ul>
                </li>

                <!------- MENU DEVS ------->
                <?php
                // Activar el menú Devs si el controlador es "gii" o "debug"
                $liDevs = in_array($controller, ['gii', 'debug']) ? 'nav-item has-treeview active menu-open' : 'nav-item has-treeview';
                $aDevs = in_array($controller, ['gii', 'debug']) ? 'nav-link active' : 'nav-link';
                ?>
                <li class="<?= $liDevs ?>">
                    <a class="<?= $aDevs ?>" href="#">
                        <i class="nav-icon fas fa-file-code"></i>
                        <p>Devs <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php
                        // Submenú "Gii"
                        $liGii = ($controller == 'gii') ? 'nav-item active' : 'nav-item';
                        $aGii = ($controller == 'gii') ? 'nav-link active' : 'nav-link';

                        // Submenú "Debug"
                        $liDebug = ($controller == 'debug') ? 'nav-item active' : 'nav-item';
                        $aDebug = ($controller == 'debug') ? 'nav-link active' : 'nav-link';
                        ?>
                        <li class="<?= $liGii ?>">
                            <a class="<?= $aGii ?>" href="<?= Url::toRoute(['/gii']); ?>" target="_blank">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Gii</p>
                            </a>
                        </li>
                        <li class="<?= $liDebug ?>">
                            <a class="<?= $aDebug ?>" href="<?= Url::toRoute(['/debug']); ?>" target="_blank">
                                <i class="nav-icon far fa-circle text-blue"></i>
                                <p>Debug</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>