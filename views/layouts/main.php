<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\hail812\adminlte3\assets\FontAwesomeAsset::register($this);
\hail812\adminlte3\assets\AdminLteAsset::register($this);
$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');

$assetDir = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

$publishedRes = Yii::$app->assetManager->publish('@vendor/hail812/yii2-adminlte3/src/web/js');
$this->registerJsFile($publishedRes[1].'/control_sidebar.js', ['depends' => '\hail812\adminlte3\assets\AdminLteAsset']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition sidebar-mini bg-light">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?= $this->render('navbar', ['assetDir' => $assetDir]) ?>
    <?= $this->render('sidebar', ['assetDir' => $assetDir]) ?>
    <div class="container-fluid py-4">
        <?= $this->render('content', ['content' => $content, 'assetDir' => $assetDir]) ?>
    </div>
    <?= $this->render('control-sidebar') ?>
    <?= $this->render('footer') ?>
</div>


<?php $this->endBody() ?>
</body>

<script type="text/javascript">
  // Recobra el estado del left menu
  (function() {
      const isCollapsed = JSON.parse(localStorage.getItem('sidebar-toggle-collapsed')) || false;
      if (isCollapsed) {
          var body = document.getElementsByTagName('body')[0];
          body.className = body.className + ' sidebar-collapse';
      }
  })();

  // Guarda en localStorage el estado del left menu
  (function() {
      $('#hamburger').click(function(event) {
          event.preventDefault();
          const isCollapsed = JSON.parse(localStorage.getItem('sidebar-toggle-collapsed')) || false;
          localStorage.setItem('sidebar-toggle-collapsed', JSON.stringify(!isCollapsed));
      });
  })();
</script>


</html>
<?php $this->endPage() ?>
