<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoriaresultado".
 *
 * @property int $id
 * @property string $nome
 * @property int $prazoRecebimento Em meses
 *
 * @property Resultadomensal[] $resultadomensals
 */
class Categoriaresultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoriaresultado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['prazoRecebimento'], 'integer'],
            [['nome'], 'string', 'max' => 30],
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
            'prazoRecebimento' => 'Prazo Recebimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultadomensal()
    {
        return $this->hasMany(Resultadomensal::className(), ['idCategoriaResultado' => 'id']);
    }
}
