<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mustafayigit34\sepet\models\Sepet */

$this->title = 'Depoya Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Depodaki Ürünler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sepet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
