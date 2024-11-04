<?php

namespace app\models;
use yii\db\Expression;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

use yii\helper\Html;

class Irfan extends ActiveRecord
{



  public static function tableName(){

    return 'cms_pelajar';
  }
  public function rules(){

   return[

    [['nama','emel','alamat','status','nokadpengenalan','notelefon'],'required','message'=>'Sila masukkan {attribute}!'],
    [['nama','alamat'],'string','max'=>255],
    [['tarikhdaftar','tarikhkemaskini'],'safe'],
    ['notelefon','integer'],
    [['nokadpengenalan'],'string','max'=> 14],
    ['emel','email','message'=>'{value} adalah tidak sah!'],




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

public function attributeLabels(){

    return[ 
      
      'idpelajar'=>'Id Pelajar',
      'nama'=> 'Nama Penuh',
      'emel'=>'Emel',
      'alamat'=>'Alamat Penuh',
      'poskod'=>'Poskod',
      'negeri'=>'Negeri',
      'status'=>'Status',
      'nokadpengenalan'=>'No Kad Pengenalan',
      'notelefon'=>'No Telefon',
      'tarikhdaftar'=>'Tarikh Daftar',
      'tarikhkemaskini'=>'Tarikh Kemaskini',
   
    
    
];






}














}






