<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


?>

<?php if(Yii::$app->session->hasFlash('daftar')): ?>

  
<div class="alert alert-primary" role="alert">
<?= Yii::$app->session->getFlash('daftar'); ?>
</div>


<?php endif; ?>

<?php $form= ActiveForm::begin(['id'=>'daftar-form']); ?>

<div>
<h1>Daftar Pelajar</h1>
</div>
<?= $form->field($daftar,'nama')->textInput(['class'=>'form-control'])->label('Nama Penuh') ?>



<?= $form->field($daftar,'nokadpengenalan')->textInput(['class'=>'form-control','maxLength'=>12])->label('Nombor Kad Pengenalan') ?>



<?= $form->field($daftar,'emel')->textInput(['class'=>'form-control'])->label('Emel') ?>



<?= $form->field($daftar,'notelefon')->textInput(['class'=>'form-control'])->label('Nombor Telefon') ?>



<?= $form->field($daftar,'alamat')->textInput(['class'=>'form-control'])->label('Alamat Penuh') ?>



<?= $form->field($daftar,'status')->textInput(['class'=>'form-control'])->label('Status') ?>



<?= Html::submitButton( 'Daftar',['class'=>'btn btn-primary','data-confirm'=>'Anda Pasti?','data-method'=>'post']) ?>



<?= Html::a('Kembali', 'index', ['class' => 'btn btn-danger']); ?>
<?php $form= ActiveForm::end(); ?>