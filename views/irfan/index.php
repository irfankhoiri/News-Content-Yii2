<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>



<?php if(Yii::$app->session->hasFlash('padam')): ?>

<div class="alert alert-danger" role="alert">
<?= Yii::$app->session->getFlash('padam'); ?>
</div>

<?php endif; ?>

<div style ='text-align:right'>
<?= Html::a('Daftar Pelajar', 'daftar', ['class' => 'btn btn-success']); ?>
<?= Html::a('Daftar Staf', 'daftar-staf', ['class' => 'btn btn-success']); ?>
</div>






<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'columns' => [
        'idpelajar',
        'nama',
        'emel',
        'nokadpengenalan',
        ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a('<i class="bi bi-eye"></i>', ['/irfan/lihat', 'idpelajar' => $this->encryptId($model->idpelajar)], ['class' => 'btn btn-primary', 'title' => 'Lihat']);
                },
                'update' => function ($url, $model, $key) {
                    return Html::a('<i class="bi bi-pencil-square"></i>', ['/irfan/kemaskini', 'idpelajar' => $this->encryptId($model->idpelajar)], ['class' => 'btn btn-info', 'title' => 'Kemaskini']);
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<i class="bi bi-trash"></i>', ['/irfan/padam', 'idpelajar' => $this->encryptId($model->idpelajar)], ['class' => 'btn btn-danger', 'title' => 'Padam', 'data-confirm' => 'Anda Pasti?', 'data-method' => 'post']);
                },
            ],
        ],
    ],
]); ?>
