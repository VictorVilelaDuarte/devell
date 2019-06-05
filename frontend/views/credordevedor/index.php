<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CredordevedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Credor Devedor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credordevedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Credor Devedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'cnpj',
            'telefone',
            'endereco',
            //'complemento',
            //'bairro',
            //'idCidade',
            //'email:email',
            //'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
