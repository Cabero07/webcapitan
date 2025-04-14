<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMatriculaEstudiantil12grado $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matrícula Estudiantíl 12mo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-matricula-estudiantil12grado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro de eliminar a este estudiante?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ci',
            'apellido1ro',
            'apellido2do',
            'nombre1ro',
            'nombre2do',
            'telefono',
            'sexo',
            'color_piel',
            'proc_soc_padre',
            'proc_soc_madre',
            'calle',
            'numero',
            'apartamento',
            'piso',
            'entre_calle',
            'y_calle',
            'barrio',
            'municipio',
            'consejo_popular',
            'tomo',
            'folio',
            'numero_matricula',
            'grado',
            'grupo',
            'deficiencias',
            'activo',
        ],
    ]) ?>

</div>
