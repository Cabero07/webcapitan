<?php
$this->title = 'Inicio';
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark text-center"><i class="fas fa-school"></i> Sistema de Gestión de Estudiantes y Profesores</h1>
                <p class="lead text-center text-muted">Bienvenido al sistema del Instituto Preuniversitario Capitán. Administra la información educativa de forma eficiente y segura.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-primary card-outline text-center h-100 elevation-2">
                <div class="card-body">
                    <i class="fas fa-user-graduate fa-3x mb-3 text-primary"></i>
                    <h4>Gestión de Estudiantes</h4>
                    <p>Controla y supervisa matrícula y rendimiento académico en todos los grados.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= \yii\helpers\Url::to(['site/dashboard']) ?>" class="btn btn-primary btn-block">Ver Estudiantes</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-success card-outline text-center h-100 elevation-2">
                <div class="card-body">
                    <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-success"></i>
                    <h4>Gestión de Profesores</h4>
                    <p>Administra datos, asignaturas y horarios del equipo docente.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= \yii\helpers\Url::to(['profesores/index']) ?>" class="btn btn-success btn-block">Ver Profesores</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-warning card-outline text-center h-100 elevation-2">
                <div class="card-body">
                    <i class="fas fa-lock fa-3x mb-3 text-warning"></i>
                    <h4>Seguridad y Accesibilidad</h4>
                    <p>Protege los datos y permite un acceso sencillo y seguro.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= \yii\helpers\Url::to(['site/security']) ?>" class="btn btn-warning btn-block">Más información</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <h2><i class="fas fa-question-circle"></i> ¿Por qué usar este sistema?</h2>
            <p class="text-muted">Simplifica la gestión educativa, mejora la organización y ofrece análisis avanzados para datos académicos y administrativos.</p>
        </div>
    </div>
</div>