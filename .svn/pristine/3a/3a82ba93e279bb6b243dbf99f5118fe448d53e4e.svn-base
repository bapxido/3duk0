<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesStudentBill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-fees-student-bill-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'school-fees-student-bill-form']]);?>

    <?= $form->field($model, 'school_fees_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'bill_date')->textInput() ?>

    <?= $form->field($model, 'bill_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
