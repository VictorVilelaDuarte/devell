<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Estado;
use yii\helpers\ArrayHelper;

$estado=Estado::find()->orderBy(['nome'=>SORT_ASC])->All();
$EstadoList=ArrayHelper::map($estado,'id','nome');

/* @var $this yii\web\View */
/* @var $model app\models\Cidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidade-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome','maxlength' => true])->label(false); ?>
        </div>
        <div class="form-group col-md-6">
            <?php 
                echo $form->field($model, 'idEstado')->dropDownList(
                    $EstadoList,
                    ['prompt'=>'Selecione um Estado']
                    )->label(false);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
