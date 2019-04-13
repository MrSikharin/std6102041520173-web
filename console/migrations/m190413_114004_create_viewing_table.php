<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%viewing}}`.
 */
class m190413_114004_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'property_for_rent_id' => $this->integer()->notNull(),
            'view_date' => $this->date(),
            'comment' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
