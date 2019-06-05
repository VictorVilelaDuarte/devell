<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categoriaresultado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categoriaresultado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'prazoRecebimento')->input('number',['placeholder' => 'Prazo Recebimento (número de meses)','maxlength' => true])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
