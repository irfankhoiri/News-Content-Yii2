<?php

use yii\db\Migration;

/**
 * Class m241022_030433_cms_staf
 */
class m241022_030433_cms_staf extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cms_staf}}', [
        'idstaf'=>$this->primaryKey(),
        'namastaf'=>$this->string(255),
        'bahagian'=>$this->string(255),
        'jawatan'=>$this->string(255),
        'emel'=>$this->string(255),
        'telefon'=>$this->integer(),
        'status'=>$this->integer(),
        'tarikhdaftar'=>$this->dateTime(),
        'tarikhkemaskini'=>$this->dateTime(),
    ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cms_staf}}');
        // echo "m241022_030433_cms_staf cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241022_030433_cms_staf cannot be reverted.\n";

        return false;
    }
    */
}
