<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Irfan;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class IrfanController extends Controller {

    public $layout = 'main';

    


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
      
        
        return $this->render('lihat', ['lihat' => $this->findModel($idpelajar)]);
    }

    public function actionKemaskini($idpelajar) {
        
      
        $kemaskini = $this->findModel($idpelajar);

        if ($kemaskini->load(Yii::$app->request->post()) && $kemaskini->save()) {
            Yii::$app->session->setFlash('kemaskini', 'Data Berjaya Dikemaskini');
        }

        return $this->render('kemaskini', ['kemaskini' => $kemaskini]);
    }

    public function actionPadam($idpelajar) {
       
       
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
