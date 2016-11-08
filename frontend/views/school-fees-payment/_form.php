<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-fees-payment-form">

    <?php $form = ActiveForm::begin(
        [
            'layout'=>'horizontal',
            'options' => [
                    'id' => 'create-school-fees-payment-form'
                ],
        ]); ?>

    <!-- <?= $form->field($model, 'school_fees_student_bill_id')->textInput() ?> -->

    <?= $form->field($model, 'payment_amount')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'payment_date')->textInput() ?> -->
    <?= $form->field($model, 'payment_date')->widget(
        DatePicker::className(), [
                // inline too, not bad
                 'inline' => false, 
                 // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
        ]);?>

    <?= $form->field($model, 'payment_method')->dropDownList($model->paymentMethods); ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>
<!-- 
    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>
 -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
