<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formapagamento */

$this->title = 'Atualizar Forma de Pagamento: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Forma de Pagamento', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="formapagamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
