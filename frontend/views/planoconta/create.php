<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planoconta */

$this->title = 'Cadastrar Plano Conta';
$this->params['breadcrumbs'][] = ['label' => 'Plano Conta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planoconta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
