<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estado-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-6">
            <?= $form->field($model, 'sigla')->textInput(['placeholder' => 'Sigla','maxlength' => true])->label(false); ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
