<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mustafayigit34\sepet\models\SepetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depodaki Ürünler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sepet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Depoya Ekle', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Depodan Silinen Ürünler', ['silinenler'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'category:ntext',
            'addingdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
