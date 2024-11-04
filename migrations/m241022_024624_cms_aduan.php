<?php

use yii\db\Migration;

/**
 * Class m241022_024624_cms_aduan
 */
class m241022_024624_cms_aduan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cms_aduan}}',[
            'id'=>$this->primaryKey(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cms_aduan}}');
        // echo "m241022_024624_cms_aduan cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241022_024624_cms_aduan cannot be reverted.\n";

        return false;
    }
    */
}
