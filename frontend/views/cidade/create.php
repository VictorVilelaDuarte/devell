<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cidade */

$this->title = 'Cadastrar Cidade';
$this->params['breadcrumbs'][] = ['label' => 'Cidade', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cidade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
