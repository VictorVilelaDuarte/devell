<?php

/* @var $this yii\web\View */

$this->title = 'Devell';
?>
<div class="site-index">

    <div class="container">
        <h2>Painel de Controle Devell</h2>
        <br>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="titulo">
                    <?php
                        if (Yii::$app->user->isGuest) {
                            echo "Faça Login para utilizar o sistema";
                        }else{
                            echo "Bem-vindo ".Yii::$app->user->identity->username;
                        }
                    ?>
                
                </h3>
            </div>
            <div class="panel-body">
                <?php if (Yii::$app->user->isGuest) {?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Associação </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Banco </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Retenção </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Categoria Resultado </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Resultado Mensal </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Tipo Conta </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Tipo Documento </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Cidade </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Estado </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Cliente </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Forma Pagamento </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Plano Conta </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Credor Devedor </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Usuário </a>
                    </div>
                    <div class="col-md-2">
                        <a disabled class="btn btn-default btn-menu" href="#">Lançamento </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <?php }else{ ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=associacao">Associação </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=banco">Banco </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=retencao">Retenção </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=categoriaresultado">Categoria Resultado </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=resultadomensal">Resultado Mensal </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=tipoconta">Tipo Conta </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=tipodocumento">Tipo Documento </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=cidade">Cidade </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=estado">Estado </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=cliente">Cliente </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=formapagamento">Forma Pagamento </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=planoconta">Plano Conta </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=credordevedor">Credor Devedor </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=usuario">Usuário </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default btn-menu" href="http://localhost:8080/index.php?r=lancamento">Lançamento </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <?php } ?>
                <br>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-menu {
        border-radius: 0px;
        width: 100%;
    }

    .btn-menu:hover {
        box-shadow: 2px 5px #ccccb3;
        background-color: white;
    }

    .titulo{
        text-align: center;
    }
</style>