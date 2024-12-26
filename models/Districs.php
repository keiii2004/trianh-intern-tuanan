<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "districs".
 *
 * @property int $id
 * @property string $distric_name
 * @property int|null $provine_id
 * @property int|null $is_Active
 * @property int|null $is_Default
 * @property int|null $is_Delete
 */
class Districs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'districs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['distric_name'], 'required'],
            [['provine_id', 'is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['distric_name'], 'string', 'max' => 30],
            [['distric_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'distric_name' => 'Distric Name',
            'provine_id' => 'Provine ID',
            'is_Active' => 'Is Active',
            'is_Default' => 'Is Default',
            'is_Delete' => 'Is Delete',
        ];
    }
    public function getProvinces()
    {
        return $this->hasOne(Provines::class, ['id' => 'provine_id']);
    }

    public function getDistrics()
    {
        return $this->hasOne(Communes::class, ['distric_id' => 'id']);
    }
}
