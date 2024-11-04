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

<?php $form= ActiveForm::begin(['id'=>'daftarstaf-form']); ?>

<div>
<h1>Daftar Staf</h1>
</div>
<?= $form->field($staf,'namastaf')->textInput(['class'=>'form-control'])->label('Nama Staf') ?>



<?= $form->field($staf,'bahagian')->textInput(['class'=>'form-control','maxLength'=>12])->label('Bahagian') ?>



<?= $form->field($staf,'emel')->textInput(['class'=>'form-control'])->label('Emel') ?>



<?= $form->field($staf,'telefon')->textInput(['class'=>'form-control'])->label('Nombor Telefon') ?>



<?= $form->field($staf,'jawatan')->textInput(['class'=>'form-control'])->label('Jawatan') ?>



<?= $form->field($staf,'status')->textInput(['class'=>'form-control'])->label('Status') ?>



<?= Html::submitButton( 'Daftar',['class'=>'btn btn-primary','data-confirm'=>'Anda Pasti?','data-method'=>'post']) ?>



<?= Html::a('Kembali', 'index', ['class' => 'btn btn-danger']); ?>
<?php $form= ActiveForm::end(); ?>