<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblProfesoresPreuniversitario $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Profesores Preuniversitarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-profesores-preuniversitario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'asignatura',
            'calle',
            'numero',
            'apartamento',
            'piso',
            'entre_calle',
            'y_calle',
            'barrio',
        ],
    ]) ?>

</div>
