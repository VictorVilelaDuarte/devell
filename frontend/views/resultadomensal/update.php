<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resultadomensal */

$this->title = 'Atualizar Resultado Mensal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resultado Mensal', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="resultadomensal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
