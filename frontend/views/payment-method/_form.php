<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentMethod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-method-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'payment-method-form']]);?>

    <?= $form->field($model, 'payment_method')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
