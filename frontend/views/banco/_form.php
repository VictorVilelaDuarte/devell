<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cliente;
use yii\helpers\ArrayHelper;

$cliente=Cliente::find()->All();
$clienteList=ArrayHelper::map($cliente,'id','nome');

/* @var $this yii\web\View */
/* @var $model app\models\Banco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banco-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->
    <div class="form-row">
        <div class="form-group col-md-4">
            <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-4">
            <?= $form->field($model, 'agencia')->textInput(['placeholder' => 'Agência','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-4">
            <?= $form->field($model, 'conta')->textInput(['placeholder' => 'Conta','maxlength' => true])->label(false); ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <?php 
                echo $form->field($model, 'idCliente')->dropDownList(
                    $clienteList,
                    ['prompt'=>'Selecione um Cliente']
                    )->label(false);
            ?>
        </div>
        <div class="form-group col-md-4">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
