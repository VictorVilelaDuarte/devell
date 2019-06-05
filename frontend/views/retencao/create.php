<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Retencao */

$this->title = 'Cadastrar Retenção';
$this->params['breadcrumbs'][] = ['label' => 'Retencão', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="retencao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
