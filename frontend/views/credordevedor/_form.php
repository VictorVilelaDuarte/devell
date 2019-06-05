<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cliente;
use app\models\Cidade;
use yii\helpers\ArrayHelper;

$cidade=Cidade::find()->All();
$cidadeList=ArrayHelper::map($cidade,'id','nome');

$cliente=Cliente::find()->All();
$clienteList=ArrayHelper::map($cliente,'id','nome');

/* @var $this yii\web\View */
/* @var $model app\models\Credordevedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="credordevedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '99.999.999/9999-99',
    'options' => ['placeholder' => 'CNPJ']
    ])->label(false);  ?>

    <?php 
        echo $form->field($model, 'idCidade')->dropDownList(
            $cidadeList,
            ['prompt'=>'Selecione uma Cidade']
            )->label(false);
    ?>

    <?= $form->field($model, 'endereco')->textInput(['placeholder' => 'Endereço','maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'complemento')->textInput(['placeholder' => 'Complemento','maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'bairro')->textInput(['placeholder' => 'Bairro','maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '(99)99999-9999',
    'options' => ['placeholder' => 'Telefone']
    ])->label(false); ?>

    <?= $form->field($model, 'email')->input('email',['placeholder' => 'E-mail','maxlength' => true])->label(false); ?>
    
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
