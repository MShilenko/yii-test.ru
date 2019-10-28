<?php

use yii\db\Migration;

/**
 * Class m191028_122950_add_index_news_content
 */
class m191028_122950_add_index_news_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->execute('ALTER TABLE news ADD FULLTEXT INDEX idx_content (content)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_content', 'news');
    }

}
