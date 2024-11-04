<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Irfan;
use app\models\CmsStaf;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;


class IrfanController extends Controller{

  public $layout = 'main';

  public function actionIndex(){

    $dataProvider = new ActiveDataProvider([

      'query'=>Irfan::find(),
      'pagination'=>[

        'pageSize'=>20,
      ],



    ]);

    
  return $this->render('index',['dataProvider'=>$dataProvider]);

  
  }

  public function actionTest(){

    return $this->render('test');
  }

  public function actionDaftar(){

    $daftar = new Irfan();

    //$req = Yii::$app->request->post('Irfan');

    if ($daftar->load(Yii::$app->request->post()) && $daftar->save()) {

      
      // $daftar->name = $req['name'];
      // $daftar->nokadpengenalan = $req['nokadpengenalan'];
      // $daftar->emel = $req['emel'];
      // $daftar->notelefon= $req['notelefon'];
      // $daftar->save();
      Yii::$app->session->setFlash('daftar','Daftar Berjaya');
      return $this->redirect(['lihat','idpelajar'=>$daftar->idpelajar]);
    }

    return $this->render('daftar',['daftar'=>$daftar]);


  }

  public function actionDaftarStaf(){

    $staf = new CmsStaf();
    
    if($staf->load(Yii::$app->request->post())&&($staf->save())){

      return $this->redirect(['lihatstaf','idstaf'=>$staf->idstaf]);

    }

    return $this->render('daftarstaf',['staf'=>$staf]);

  }



  public function actionLihat($idpelajar){

   
    

    return $this->render('lihat',['lihat'=>$this->findModel($idpelajar)]);


 }

 public function actionKemaskini($idpelajar){

  $kemaskini = $this->findModel($idpelajar);

  if($kemaskini->load(Yii::$app->request->post())&& $kemaskini->save()){

    Yii::$app->session->setFlash('kemaskini','Data Berjaya Dikemaskini');
  }


  return $this->render('kemaskini',['kemaskini'=>$kemaskini]);
 }

 public function actionPadam($idpelajar){


  $padam = $this->findModel($idpelajar);

  if($padam){

   
    $padam->delete();
    Yii::$app->session->setFlash('padam','Data Berjaya Dipadam');
    return $this->redirect(['index']);
  }
  
 }





protected function findModelStaf($idstaf){

  $model= CmsStaf::findOne($idstaf);
  return $model;
}
}







