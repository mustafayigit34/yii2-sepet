<?php

namespace mustafayigit34\sepet\models;

use Yii;

/**
 * This is the model class for table "sepet".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category
 * @property string|null $addingdate
 */
class Sepet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sepet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'string'],
            [['addingdate'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'addingdate' => 'Addingdate',
        ];
    }
}
