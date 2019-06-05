<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssociacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Associação';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Associação', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'descricao:ntext',
            'telefone',
            'endereco',
            //'complemento',
            //'bairro',
            //'idCidade',
            //'email:email',
            //'cnpj',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
