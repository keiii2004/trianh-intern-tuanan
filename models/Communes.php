<?php

namespace app\models;

use Codeception\Lib\Di;
use Yii;

/**
 * This is the model class for table "communes".
 *
 * @property int $id
 * @property string $commune_name
 * @property int|null $distric_id
 * @property int|null $is_Active
 * @property int|null $is_Default
 * @property int|null $is_Delete
 */
class Communes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'communes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['commune_name'], 'required'],
            [['distric_id', 'is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['commune_name'], 'string', 'max' => 30],
            [['commune_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'commune_name' => 'Commune Name',
            'distric_id' => 'Distric ID',
            'is_Active' => 'Is Active',
            'is_Default' => 'Is Default',
            'is_Delete' => 'Is Delete',
        ];
    }
    public function getDistrics()
    {
        return $this->hasOne(Districs::class, ['id' => 'distric_id']);
    }
}