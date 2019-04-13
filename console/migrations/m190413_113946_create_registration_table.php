<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%registration}}`.
 */
class m190413_113946_create_registration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registration}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'property_for_rent_id' => $this->integer()->notNull(),
            'dateJoined' => $this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%registration}}');
    }
}
