<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mustafayigit34\sepet\models\SepetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Depodan Silinen Ürünler';   //Sepets
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sepet-silinenler">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Depoya Geri Dön', ['index'], ['class' => 'btn btn-success']) ?>
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

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
