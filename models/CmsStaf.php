<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "cms_staf".
 *
 * @property int $idstaf
 * @property string|null $namastaf
 * @property string|null $bahagian
 * @property string|null $jawatan
 * @property string|null $emel
 * @property int|null $telefon
 * @property int|null $status
 * @property string|null $tarikhdaftar
 * @property string|null $tarikhkemaskini
 */
class CmsStaf extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cms_staf';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namastaf','bahagian','jawatan','emel','telefon','status'],'required','message'=>'Sila masukkan {attribute}!'],
            [['telefon', 'status'], 'default', 'value' => null],
            [['telefon', 'status'], 'integer'],
            [['tarikhdaftar', 'tarikhkemaskini'], 'safe'],
            [['namastaf', 'bahagian', 'jawatan', 'emel'], 'string', 'max' => 255],
            ['emel','email','message'=>'{value} tidak sah'],
        ];
    }

    public function behaviors(){

        return[[
    
          'class'=> TimestampBehavior::className(),
          'createdAtAttribute'=>'tarikhdaftar',
          'updatedAtAttribute'=>'tarikhkemaskini',
    
          'value'=> 
            date("Y-m-d H:i:s"),
        
    
        ],];
    
      }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idstaf' => 'Idstaf',
            'namastaf' => 'Namastaf',
            'bahagian' => 'Bahagian',
            'jawatan' => 'Jawatan',
            'emel' => 'Emel',
            'telefon' => 'Telefon',
            'status' => 'Status',
            'tarikhdaftar' => 'Tarikhdaftar',
            'tarikhkemaskini' => 'Tarikhkemaskini',
        ];
    }
}
