<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoconta */

$this->title = 'Atualizar Tipo Conta: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Tipocontas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="tipoconta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
