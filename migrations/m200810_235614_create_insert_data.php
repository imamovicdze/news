<?php

use yii\db\Migration;

/**
 * Class m200810_235614_create_insert_data
 */
class m200810_235614_create_insert_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => md5('admin'),
            'isAdmin' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => md5('admin'),
            'isAdmin' => 1
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200810_235614_create_insert_data cannot be reverted.\n";

        return false;
    }
    */
}
