<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Estado */

$this->title = 'Atualizar Estado: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Estado', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
