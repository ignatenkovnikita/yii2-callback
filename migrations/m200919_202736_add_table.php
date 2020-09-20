<?php

use yii\db\Migration;

/**
 * Class m200919_202736_add_table
 */
class m200919_202736_add_table extends Migration
{
    const TABLE_CALLBACK = '{{%callback}}';

    use \ignatenkovnikita\migrationsaddons\AddAuthorUpdater;
    use \ignatenkovnikita\migrationsaddons\AddCreatedUpdated;

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_CALLBACK,[
            'id' => $this->primaryKey(),
            'post_data' => $this->text(),
            'get_data' => $this->text(),
            'header_data' => $this->text(),
        ]);
        $this->addAllTime(self::TABLE_CALLBACK);
        $this->addAllUser(self::TABLE_CALLBACK);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_CALLBACK);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200919_202736_add_table cannot be reverted.\n";

        return false;
    }
    */
}
