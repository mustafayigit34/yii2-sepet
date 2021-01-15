<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mustafayigit34\sepet\models\Sepet */

$this->title = 'Ürün Güncelle (' . $model->name . ')';
$this->params['breadcrumbs'][] = ['label' => 'Depodaki Ürünler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ürün Güncelle';
?>
<div class="sepet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
