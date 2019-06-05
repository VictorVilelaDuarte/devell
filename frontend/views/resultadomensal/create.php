<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resultadomensal */

$this->title = 'Cadastrar Resultado Mensal';
$this->params['breadcrumbs'][] = ['label' => 'Resultado Mensal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultadomensal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
