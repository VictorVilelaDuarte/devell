<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categoriaresultado */

$this->title = 'Atualizar Categoria Resultado: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Categoria Resultado', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="categoriaresultado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
