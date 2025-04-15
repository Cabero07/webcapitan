<!doctype html>
<html lang="en">
<?php
$this->title = 'Seguridad del Sistema';
?>
<body>
  <main>
    <div class="container mt-5">
      <h1 class="mb-4 text-center">Seguridad y Protección de Datos</h1>
      <p class="lead text-muted text-center">En el Instituto Preuniversitario Capitán, la seguridad de los datos de estudiantes y profesores es nuestra máxima prioridad. Nuestro sistema está diseñado para garantizar la integridad, confidencialidad y disponibilidad de la información.</p>

      <hr class="my-5">

      <h2>Medidas de Seguridad Implementadas</h2>
      <ul class="list-group mb-4">
        <li class="list-group-item">
          <strong>Cifrado de Datos:</strong> Todas las comunicaciones se realizan a través de conexiones seguras (HTTPS) y los datos sensibles, como contraseñas, están cifrados utilizando algoritmos avanzados como <code>bcrypt</code>.
        </li>
        <li class="list-group-item">
          <strong>Control de Acceso:</strong> El sistema utiliza un modelo de acceso basado en la autenticación obligatoria para garantizar que solo usuarios autorizados puedan acceder a ciertos datos y funcionalidades.
        </li>
        <li class="list-group-item">
          <strong>Respaldo Regular:</strong> Los datos se respaldan regularmente en servidores seguros para prevenir pérdidas en caso de fallos o ataques.
        </li>
        <li class="list-group-item">
          <strong>Protección Contra Ataques:</strong> El sistema está protegido contra ataques comunes como inyecciones SQL, Cross-Site Scripting (XSS) y Cross-Site Request Forgery (CSRF).
        </li>
        <li class="list-group-item">
          <strong>Registro de Actividades:</strong> Todas las acciones importantes realizadas en el sistema son registradas para permitir auditorías y detectar actividades sospechosas.
        </li>
      </ul>

      <hr class="my-5">

      <h2>Política de Privacidad</h2>
      <p class="text-muted">Nos comprometemos a proteger la privacidad de estudiantes, profesores y administradores. Los datos recopilados son utilizados exclusivamente para fines académicos y administrativos, y nunca serán compartidos con terceros sin el consentimiento explícito de las partes involucradas.</p>

      <hr class="my-5">

      <h2>Recomendaciones de Seguridad</h2>
      <p>Para garantizar la seguridad de tu cuenta y la información del sistema:</p>
      <ol>
        <li>Utiliza contraseñas fuertes y únicas.</li>
        <li>No compartas tus credenciales de acceso con nadie.</li>
        <li>Inicia sesión solo desde dispositivos y redes seguras.</li>
        <li>Reporta cualquier actividad sospechosa al administrador del sistema.</li>
      </ol>

      <hr class="my-5">

      <footer class="text-muted text-center">
        <p>&copy; 2025 Instituto Preuniversitario Capitán. Todos los derechos reservados. <a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Contáctanos</a> para más información.</p>
      </footer>
    </div>
  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>