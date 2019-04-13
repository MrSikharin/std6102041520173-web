<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Branch}}`.
 */
class m190413_112548_create_Branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Branch}}', [
            'id' => $this->primaryKey(),
            'branch_no' => $this->string(5)->notNull()->unique(),
            'name' => $this->string(200),
            'street' => $this->string(150),
            'city' => $this->string(150),
            'postcode'=> $this->string(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Branch}}');
    }
}
