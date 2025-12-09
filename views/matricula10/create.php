<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil10grado $model */

$this->title = 'Añadir estudiante 10mo grado';
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl - 10mo Grado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mt-4">
    <?= $this->render('_form', ['model'=>$model]) ?>
</div>