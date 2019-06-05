<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cliente;
use app\models\Planoconta;
use app\models\Tipoconta;
use app\models\Formapagamento;
use app\models\Tipodocumento;
use app\models\Banco;
use app\models\Credordevedor;

use yii\helpers\ArrayHelper;


$cliente=Cliente::find()->All();
$clienteList=ArrayHelper::map($cliente,'id','nome');

$plano=Planoconta::find()->All();
$planoList=ArrayHelper::map($plano,'id','nome');

$conta=Tipoconta::find()->All();
$contaList=ArrayHelper::map($conta,'id','nome');

$forma=Formapagamento::find()->All();
$formaList=ArrayHelper::map($forma,'id','nome');

$doc=Tipodocumento::find()->All();
$docList=ArrayHelper::map($doc,'id','nome');

$banco=Banco::find()->All();
$bancoList=ArrayHelper::map($banco,'id','nome');

$credor=Credordevedor::find()->All();
$credorList=ArrayHelper::map($credor,'id','nome');

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lancamento-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <?= $form->field($model, 'tipo')->textInput(['placeholder' => 'Tipo'])->label(false) ?>
        </div>
        <div class="form-group col-md-6">
            <?= $form->field($model, 'numDocumento')->input('number',['placeholder' => 'Número Documento'])->label(false) ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <?= $form->field($model, 'dtEmissao')->input('date',['maxlength' => true]) ?>  
        </div>  
        <div class="form-group col-md-4">
            <?= $form->field($model, 'dtVencimento')->input('date',['maxlength' => true]) ?>
        </div>
        <div class="form-group col-md-4">
            <?= $form->field($model, 'dtRealizacao')->input('date',['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <?= $form->field($model, 'valorPrevisto')->TextInput(['placeholder' => 'Valor Previsto','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-4">
            <?= $form->field($model, 'valorRealizado')->TextInput(['placeholder' => 'Valor Realizado','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-4">
            <?php 
            echo $form->field($model, 'idTipoDocumento')->dropDownList(
                $docList,
                ['prompt'=>'Selecione um Documento']
                )->label(false);
            ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <?php 
                echo $form->field($model, 'idBanco')->dropDownList(
                    $bancoList,
                    ['prompt'=>'Selecione um Banco']
                    )->label(false);
            ?>
        </div>
        <div class="form-group col-md-3">
            <?php 
                echo $form->field($model, 'idCredorDevedor')->dropDownList(
                    $credorList,
                    ['prompt'=>'Selecione um Credor/Devedor']
                    )->label(false);
            ?>
        </div>
        <div class="form-group col-md-3">
            <?php 
                echo $form->field($model, 'idFormaPagamento')->dropDownList(
                    $formaList,
                    ['prompt'=>'Selecione uma Forma de pagamento']
                    )->label(false);
            ?>
        </div>
        <div class="form-group col-md-3">
            <?php 
            echo $form->field($model, 'idTipoConta')->dropDownList(
                $contaList,
                ['prompt'=>'Selecione um Tipo Conta']
                )->label(false);
            ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <?php 
                echo $form->field($model, 'idPlanoConta')->dropDownList(
                    $planoList,
                    ['prompt'=>'Selecione um Plano Conta']
                    )->label(false);
            ?>
        </div>
        <div class="form-group col-md-4">
            <?= $form->field($model, 'descricao')->textInput(['placeholder' => 'Descricao','maxlength' => true])->label(false) ?>
        </div>
        <div class="form-group col-md-4">
            <?php 
                echo $form->field($model, 'idCliente')->dropDownList(
                    $clienteList,
                    ['prompt'=>'Selecione um Cliente']
                    )->label(false);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
