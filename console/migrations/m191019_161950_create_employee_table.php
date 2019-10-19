<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m191019_161950_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'middleName' => $this->string(),
            'salary' => $this->integer(),
            'email' => $this->string()->unique(),
            'city' => $this->integer(),
            'birthday' => $this->datetime(),
            'startDate' => $this->datetime(),
            'position' => $this->string(),
            'identifikator' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employee}}');
    }
}
