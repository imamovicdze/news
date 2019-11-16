<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m191116_211600_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'category_id' => $this->integer(),
            'title' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'status' => $this->integer(),
        ], $tableOptions);

        $this->createIndex(
            'idx-user_id',
            'article',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user_id',
            'article',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-category_id',
            'article',
            'category_id'
        );

        $this->addForeignKey(
            'fk-category_id',
            'article',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article}}');
    }
}
