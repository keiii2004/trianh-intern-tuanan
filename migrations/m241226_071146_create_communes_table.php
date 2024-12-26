<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%communes}}`.
 */
class m241226_071146_create_communes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%communes}}', [
            'id' => $this->primaryKey(),
            'commune_name' => $this->string(30)->notNull()->unique(),
            'distric_id' => $this->integer(),
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
        $this->dropTable('{{%communes}}');
    }
}