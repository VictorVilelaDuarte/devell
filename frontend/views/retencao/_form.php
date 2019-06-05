<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cliente;
use yii\helpers\ArrayHelper;

$cliente=Cliente::find()->all();
$clienteList=ArrayHelper::map($cliente,'id','nome');
/* @var $this yii\web\View */
/* @var $model app\models\Retencao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="retencao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ano')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '9999',
    'options' => ['placeholder' => 'Ano']
    ])->label(false);  ?>

    <?= $form->field($model, 'mes')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '99',
    'options' => ['placeholder' => 'Mês']
    ])->label(false);  ?>

    <?= $form->field($model, 'valor')->TextInput(['placeholder' => 'Valor','maxlength' => true])->label(false); ?>

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
