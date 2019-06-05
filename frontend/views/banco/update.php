<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */

$this->title = 'Update Banco: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Banco', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="banco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
