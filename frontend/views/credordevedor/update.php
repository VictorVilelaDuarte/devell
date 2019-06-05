<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Credordevedor */

$this->title = 'Atualizar Credor Devedor: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Credor Devedor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="credordevedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
