<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Associacao;
use app\models\Cidade;
use yii\helpers\ArrayHelper;

$cidade = Cidade::find()->orderBy(['nome' => SORT_ASC])->All();;
$cidadeList = ArrayHelper::map($cidade, 'id', 'nome');

$associacao = Associacao::find()->orderBy(['nome' => SORT_ASC])->All();;
$associacaoList = ArrayHelper::map($associacao, 'id', 'nome');

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-row">
        <div class="form-group col-md-12">
            <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome', 'maxlength' => true])->label(false); ?>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '99.999.999/9999-99',
                    'options' => ['placeholder' => 'CNPJ']
                ])->label(false);  ?>
            </div>
            <div class="form-group col-md-3">
                <?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '(99)99999-9999',
                    'options' => ['placeholder' => 'Telefone']
                ])->label(false); ?>
            </div>
            <div class="form-group col-md-3">
                <?= $form->field($model, 'email')->input('email', ['placeholder' => 'E-mail', 'maxlength' => true])->label(false); ?>
            </div>
            <div class="form-group col-md-3">
                <?php
                echo $form->field($model, 'idAssociacao')->dropDownList(
                    $associacaoList,
                    ['prompt' => 'Selecione uma Associação']
                )->label(false);;
                ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <?php
                echo $form->field($model, 'idCidade')->dropDownList(
                    $cidadeList,
                    ['prompt' => 'Selecione uma Cidade']
                )->label(false);
                ?>
            </div>
            <div class="form-group col-md-3">
                <?= $form->field($model, 'endereco')->textInput(['placeholder' => 'Endereço', 'maxlength' => true])->label(false); ?>
            </div>
            <div class="form-group col-md-3">
                <?= $form->field($model, 'complemento')->textInput(['placeholder' => 'Complemento', 'maxlength' => true])->label(false); ?>
            </div>
            <div class="form-group col-md-3">
                <?= $form->field($model, 'bairro')->textInput(['placeholder' => 'Bairro', 'maxlength' => true])->label(false); ?>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>