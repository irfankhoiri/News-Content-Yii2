<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
?>
<div style ='text-align:right'>
<?= Html::a('Kemaskini', ['kemaskini','idpelajar'=>$lihat->idpelajar], ['class' => 'btn btn-success']); ?>
</div>

<?php
echo DetailView::widget([
  'model' => $lihat,
  'attributes' => [
      
          'idpelajar',
          'nama',
          'emel',
          'nokadpengenalan',
         
      
  ],

  
]);

?>

<?= Html::a('Kembali', 'index', ['class' => 'btn btn-danger']); ?>







