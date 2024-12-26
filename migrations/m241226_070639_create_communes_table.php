<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%communes}}`.
 */
class m241226_070639_create_communes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%communes}}', [
            'id' => $this->primaryKey(),
            'commune_name' => $this->string(30)->notNull()->unique(),
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
