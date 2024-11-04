<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php if(Yii::$app->session->hasFlash('kemaskini')): ?>

<div class="alert alert-success" role="alert">
<?= Yii::$app->session->getFlash('kemaskini'); ?>
</div>

<?php endif; ?>

<?php $form= ActiveForm::begin(['id'=>'kemaskini-form']); ?>

<?= $form->field($kemaskini,'nama')->textInput(['placeholder'=>'Nama Penuh','class'=>'form-control'])->label(false) ?>

<?= $form->field($kemaskini,'nokadpengenalan')->textInput(['placeholder'=>'Nombor Kad Pengenalan','class'=>'form-control'])->label(false) ?>

<?= $form->field($kemaskini,'emel')->textInput(['placeholder'=>'Emel','class'=>'form-control'])->label(false) ?>

<?= $form->field($kemaskini,'notelefon')->textInput(['placeholder'=>'Nombor Telefon','class'=>'form-control'])->label(false) ?>

<?= Html::a('Kemaskini', ['kemaskini', 'idpelajar' => $this->encryptId($lihat->idpelajar)], ['class' => 'btn btn-success']) ?>
<?= Html::a('Kembali', 'index', ['class' => 'btn btn-danger']) ?>


<?php $form= ActiveForm::end(); ?>