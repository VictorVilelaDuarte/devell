<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cliente;
use app\models\Planoconta;
use yii\helpers\ArrayHelper;

$cliente=Cliente::find()->all();
$clienteList=ArrayHelper::map($cliente,'id','nome');

$plano=Planoconta::find()->all();
$planoList=ArrayHelper::map($plano,'id','nome');
/* @var $this yii\web\View */
/* @var $model app\models\Planoconta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planoconta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>

    <?php 
        echo $form->field($model, 'idPai')->dropDownList(
            $planoList,
            ['prompt'=>'Selecione um Plano Conta']
            )->label(false);
    ?>

    <?php 
        echo $form->field($model, 'idCliente')->dropDownList(
            $clienteList,
            ['prompt'=>'Selecione um Cliente']
            )->label(false);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
