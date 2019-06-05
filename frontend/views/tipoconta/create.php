<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoconta */

$this->title = 'Cadastrar Tipo Conta';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Conta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoconta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
