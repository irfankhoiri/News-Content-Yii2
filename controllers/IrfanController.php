<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Irfan;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class IrfanController extends Controller {

    public $layout = 'main';

    
    private $encryptionKey = '123'; 
    protected function encryptId($id) {
        return strtr(base64_encode(Yii::$app->security->encryptByKey($id, $this->encryptionKey)), '+/=', '-_,');
    }

    protected function decryptId($encryptedId) {
        return Yii::$app->security->decryptByKey(base64_decode(strtr($encryptedId, '-_,', '+/=')), $this->encryptionKey);
    }

    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Irfan::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionLihat($idpelajar) {
      
        $idpelajar = $this->decryptId($idpelajar);
        return $this->render('lihat', ['lihat' => $this->findModel($idpelajar)]);
    }

    public function actionKemaskini($idpelajar) {
        
        $idpelajar = $this->decryptId($idpelajar);
        $kemaskini = $this->findModel($idpelajar);

        if ($kemaskini->load(Yii::$app->request->post()) && $kemaskini->save()) {
            Yii::$app->session->setFlash('kemaskini', 'Data Berjaya Dikemaskini');
        }

        return $this->render('kemaskini', ['kemaskini' => $kemaskini]);
    }

    public function actionPadam($idpelajar) {
       
        $idpelajar = $this->decryptId($idpelajar);
        $padam = $this->findModel($idpelajar);

        if ($padam) {
            $padam->delete();
            Yii::$app->session->setFlash('padam', 'Data Berjaya Dipadam');
            return $this->redirect(['index']);
        }
    }



    protected function findModel($idpelajar) {
        if (($model = Irfan::findOne($idpelajar)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
