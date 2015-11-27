<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dailymarket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dailymarket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'market')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commodity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variety')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrival_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_price')->textInput() 
	?>

    <?= $form->field($model, 'max_price')->textInput() ?>

    <?= $form->field($model, 'modal_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
