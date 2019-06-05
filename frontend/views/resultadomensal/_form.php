<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cliente;
use app\models\Categoriaresultado;
use yii\helpers\ArrayHelper;

$categoria=Categoriaresultado::find()->All();
$categoriaList=ArrayHelper::map($categoria,'id','nome');

$cliente=Cliente::find()->all();
$clienteList=ArrayHelper::map($cliente,'id','nome');

/* @var $this yii\web\View */
/* @var $model app\models\Resultadomensal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultadomensal-form">

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
        echo $form->field($model, 'idCategoriaResultado')->dropDownList(
            $categoriaList,
            ['prompt'=>'Selecione uma Categoria']
            )->label(false);
    ?>

    <?php 
        echo $form->field($model, 'idCliente')->dropDownList(
            $clienteList,
            ['prompt'=>'Selecione um Cliente']
            )->label(false);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
