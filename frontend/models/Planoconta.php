<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planoconta".
 *
 * @property int $id
 * @property string $nome
 * @property int $idPai
 * @property int $idCliente
 *
 * @property Lancamento[] $lancamentos
 * @property Cliente $cliente
 * @property Planoconta $pai
 * @property Planoconta[] $planocontas
 */
class Planoconta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planoconta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'idPai', 'idCliente'], 'required'],
            [['idPai', 'idCliente'], 'integer'],
            [['nome'], 'string', 'max' => 120],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
            [['idPai'], 'exist', 'skipOnError' => true, 'targetClass' => Planoconta::className(), 'targetAttribute' => ['idPai' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'idPai' => 'Id Pai',
            'idCliente' => 'Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamento()
    {
        return $this->hasMany(Lancamento::className(), ['idPlanoConta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPai()
    {
        return $this->hasOne(Planoconta::className(), ['id' => 'idPai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanoconta()
    {
        return $this->hasMany(Planoconta::className(), ['idPai' => 'id']);
    }
}
