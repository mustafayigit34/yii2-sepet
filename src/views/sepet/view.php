<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model mustafayigit34\sepet\models\Sepet */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Depodaki Ürünler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sepet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Depoya Geri Dön', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bu ürünü silmek istediğinize emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'category:ntext',
            'addingdate',
        ],
    ]) ?>

</div>
