<?php

use yii\db\Migration;

/**
 * Class m241022_024546_cms_pelajar
 */
class m241022_024546_cms_pelajar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cms_pelajar}}',[

            'idpelajar'=>$this->primaryKey(),
            'nama'=>$this->string(255),
            'emel'=>$this->string(255),
            'alamat'=>$this->string(255),
            'notelefon'=>$this->integer(),
            'nokadpengenalan'=>$this->string(12),
            'status'=>$this->integer(),
            'tarikhdaftar'=>$this->dateTime(),
            'tarikhkemaskini'=>$this->dateTime(),


        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('{{%cms_pelajar}}');

        // echo "m241022_024546_cms_pelajar cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241022_024546_cms_pelajar cannot be reverted.\n";

        return false;
    }
    */
}
