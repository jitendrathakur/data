<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DailymarketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dailymarkets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dailymarket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?/*= Html::a('Create Dailymarket', ['create'], ['class' => 'btn btn-success'])*/ ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'state',
            'district',
            'market',
            'commodity',
            'variety',
             'arrival_date',
             'min_price',
             'max_price',
             'modal_price',
            // 'id',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
