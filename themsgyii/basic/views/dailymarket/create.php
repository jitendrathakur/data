<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dailymarket */

$this->title = 'Create Dailymarket';
$this->params['breadcrumbs'][] = ['label' => 'Dailymarkets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dailymarket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
