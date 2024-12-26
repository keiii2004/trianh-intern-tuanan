<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%provines}}`.
 */
class m241226_071623_create_provines_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%provines}}', [
            'id' => $this->primaryKey(),
            'provine_name' => $this->string(30)->notNull()->unique(),
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
        $this->dropTable('{{%provines}}');
    }
}