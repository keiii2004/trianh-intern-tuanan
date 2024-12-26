<?php

namespace app\models;

use Codeception\Lib\Di;
use Yii;

/**
 * This is the model class for table "provines".
 *
 * @property int $id
 * @property string $provine_name
 * @property int|null $is_Active
 * @property int|null $is_Default
 * @property int|null $is_Delete
 */
class Provines extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provines';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provine_name'], 'required'],
            [['is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['provine_name'], 'string', 'max' => 30],
            [['provine_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provine_name' => 'Provine Name',
            'is_Active' => 'Is Active',
            'is_Default' => 'Is Default',
            'is_Delete' => 'Is Delete',
        ];
    }
    public function getDistrics()
    {
        return $this->hasMany(Districs::class, ['provine_id' => 'id']);
    }
}
