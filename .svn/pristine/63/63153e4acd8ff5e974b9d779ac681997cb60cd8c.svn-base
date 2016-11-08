<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesPaymentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-fees-payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_fees_payment_id') ?>

    <?= $form->field($model, 'school_fees_student_bill_id') ?>

    <?= $form->field($model, 'payment_amount') ?>

    <?= $form->field($model, 'payment_date') ?>

    <?= $form->field($model, 'payment_method') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
