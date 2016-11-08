<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesStudentBillSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-fees-student-bill-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_fees_student_bill_id') ?>

    <?= $form->field($model, 'school_fees_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'bill_date') ?>

    <?= $form->field($model, 'bill_amount') ?>

    <?php // echo $form->field($model, 'paid_amount') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
