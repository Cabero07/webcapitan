<!doctype html>
<html lang="en">
<?php
$this->title = 'Inicio';
?>
<body>
  <main>
    <div class="container text-center mt-5">
      <h1 class="display-4">Sistema de Gestión de Estudiantes y Profesores</h1>
      <p class="lead text-muted">Bienvenido al sistema de gestión del Instituto Preuniversitario Capitán. Administra y supervisa la información de estudiantes y profesores de manera eficiente, accesible y segura.</p>
      
      <div class="row mt-5">
        <div class="col-lg-4">
          <h3>Gestión de Estudiantes</h3>
          <p>Controla y supervisa la matrícula y el rendimiento académico de los estudiantes en todos los niveles.</p>
          <a href="<?= \yii\helpers\Url::to(['site/dashboard']) ?>" class="btn btn-primary">Ver Estudiantes</a>
        </div>
        <div class="col-lg-4">
          <h3>Gestión de Profesores</h3>
          <p>Administra los datos de los profesores, sus asignaturas y horarios de manera organizada.</p>
          <a href="<?= \yii\helpers\Url::to(['profesores/index']) ?>" class="btn btn-success">Ver Profesores</a>
        </div>
        <div class="col-lg-4">
          <h3>Seguridad y Accesibilidad</h3>
          <p>Garantiza la seguridad de los datos y permite un acceso rápido y seguro a la información.</p>
          <a href="<?= \yii\helpers\Url::to(['site/security']) ?>" class="btn btn-warning">Más Información</a>
        </div>
      </div>

      <hr class="my-5">

      <div class="row">
        <div class="d-flex justify-content-center align-items-center ">
          <div class="col-md-6">
            <h2>¿Por qué usar este sistema?</h2>
            <p class="text-center text-muted">Nuestro sistema está diseñado para simplificar la gestión educativa, mejorar la organización y ofrecer herramientas avanzadas para el análisis de datos académicos y administrativos.</p>
          </div>
        </div>
      </div>

      <hr class="my-5">
    </div>
  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>