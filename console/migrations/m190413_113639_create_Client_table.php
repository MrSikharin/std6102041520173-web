<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Client}}`.
 */
class m190413_113639_create_Client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Client}}', [
            'id' => $this->primaryKey(),
            'client_no' => $this->string(5)->notNull()->unique(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'tel_no' => $this->string(11),
            'pref_type' => $this->string(50),
            'max_rent' => $this->decimal(7,2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Client}}');
    }
}
