<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categoriaresultado */

$this->title = 'Cadastrar Categoria Resultado';
$this->params['breadcrumbs'][] = ['label' => 'Categoria Resultado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoriaresultado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
