<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil11grado $model */

$this->title = 'Añadir estudiante 11no grado';
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl - 11no Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mt-4">
    <?= $this->render('_form', ['model'=>$model]) ?>
</div>