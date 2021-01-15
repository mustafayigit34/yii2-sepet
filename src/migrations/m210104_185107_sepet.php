<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210104_185107_sepet
 */
class m210104_185107_sepet extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('sepet', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'category' => Schema::TYPE_TEXT,
            'addingdate' => Schema::TYPE_DATE,
            // $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('sepet');;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210104_185107_sepet cannot be reverted.\n";

        return false;
    }
    */
}
