<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tag}}`.
 */
class m191116_211620_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%article_tag}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer()
        ], $tableOptions);

        $this->createIndex(
            'idx-article_tag_id',
            'article_tag',
            'article_id'
        );

        $this->addForeignKey(
            'fk-article_tag_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-tag_id',
            'article_tag',
            'tag_id'
        );

        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article_tag}}');
    }
}
