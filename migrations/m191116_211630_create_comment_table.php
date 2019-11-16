<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m191116_211630_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'text' => $this->string(),
            'status' => $this->integer(),
            'date' => $this->date()
        ], $tableOptions);

        $this->createIndex(
            'idx-article_id',
            'comment',
            'article_id'
        );

        $this->addForeignKey(
            'fk-article_id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-user_id',
            'comment',
            'user_id'
        );

        $this->addForeignKey(
            'fk1-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
