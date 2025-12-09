<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil12grado $model */

$this->title = 'Añadir estudiante 12mo grado';
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl - 12mo Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mt-4">
    <?= $this->render('_form', ['model'=>$model]) ?>
</div>