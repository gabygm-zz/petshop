<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property string $sex
 */
class Pet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'sex'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'sex' => 'Sex',
        ];
    }
}
