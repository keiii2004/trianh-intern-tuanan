<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%districs}}`.
 */
class m241226_071414_create_districs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%districs}}', [
            'id' => $this->primaryKey(),
            'distric_name' => $this->string(30)->notNull()->unique(),
            'provine_id' => $this->integer(),
            'is_Active' => $this->boolean(),
            'is_Default' => $this->boolean(),
            'is_Delete' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%districs}}');
    }
}