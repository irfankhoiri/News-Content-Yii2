<?php

use yii\db\Migration;

/**
 * Class m241022_040552_cms_statusaduan
 */
class m241022_040552_cms_statusaduan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cms_statusaduan}}',[
            'id'=>$this->primaryKey(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cms_statusaduan}}');
        // echo "m241022_040552_cms_statusaduan cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241022_040552_cms_statusaduan cannot be reverted.\n";

        return false;
    }
    */
}
