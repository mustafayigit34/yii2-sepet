<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210104_200935_silinenler
 */
class m210104_200935_silinenler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('silinenler', [
            'id' => Schema::TYPE_INTEGER,
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
        return $this->dropTable('silinenler');;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210104_200935_silinenler cannot be reverted.\n";

        return false;
    }
    */
}
