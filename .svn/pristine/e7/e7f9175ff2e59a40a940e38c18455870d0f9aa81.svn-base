<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;
?>

 <?= $form->field($model, 'staff_member_id')->dropDownList($model->staffmembers); ?>

    <?= $form->field($model, 'subject_id')->dropDownList($model->subjects); ?>

    <?= $form->field($model, 'class_subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_period_id')->dropDownList($model->academicperiods); ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
