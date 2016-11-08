<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Select2

/* @var $this yii\web\View */
/* @var $model app\models\AttendanceGeneral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendance-general-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'academic_day_id')->dropDownList($model->academicDays); ?>

    <?= $form->field($model, 'student_id')->widget( Select2 ::classname(), [
         'data' => $model->students,
         'size' => Select2::LARGE,
         'options' => ['placeholder' => 'Select a student ...', 'multiple' => true ],
         'pluginOptions' => [
            'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'attendance_status')->dropDownList([ 'present' => 'Present', 'absent' => 'Absent', 'away with permission' => 'Away with permission', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
