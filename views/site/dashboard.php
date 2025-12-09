<?php
use yii\helpers\Html;
$this->title = 'Panel de Control';

?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt"></i> Panel de Control</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Inicio</a></li>
                    <li class="breadcrumb-item active">Panel de Control</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-info card-outline elevation-3">
                <div class="card-body text-center">
                    <span class="fa-stack fa-2x mb-2">
                        <i class="fas fa-circle fa-stack-2x text-info"></i>
                        <i class="fas fa-user-graduate fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3 class="font-weight-bolder"><?= $total10 ?></h3>
                    <p class="mb-0 text-muted">Estudiantes de 10<sup>°</sup></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-success card-outline elevation-3">
                <div class="card-body text-center">
                    <span class="fa-stack fa-2x mb-2">
                        <i class="fas fa-circle fa-stack-2x text-success"></i>
                        <i class="fas fa-user-graduate fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3 class="font-weight-bolder"><?= $total11 ?></h3>
                    <p class="mb-0 text-muted">Estudiantes de 11<sup>°</sup></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-warning card-outline elevation-3">
                <div class="card-body text-center">
                    <span class="fa-stack fa-2x mb-2">
                        <i class="fas fa-circle fa-stack-2x text-warning"></i>
                        <i class="fas fa-user-graduate fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3 class="font-weight-bolder"><?= $total12 ?></h3>
                    <p class="mb-0 text-muted">Estudiantes de 12<sup>°</sup></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-danger card-outline elevation-3">
                <div class="card-body text-center">
                    <span class="fa-stack fa-2x mb-2">
                        <i class="fas fa-circle fa-stack-2x text-danger"></i>
                        <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3 class="font-weight-bolder"><?= $totalProfesores ?></h3>
                    <p class="mb-0 text-muted">Profesores</p>
                </div>
            </div>
        </div>
    </div>
</div>