<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%followers}}`. 
 */
class m230429_143646_create_followers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%followers}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100),
            'name' => $this->string(100),
            'birthDate' => $this->date(),
            'sex' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%followers}}');
    }
}
