<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCourse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-course-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'student-course-form']]);?>

    <?= $form->field($model, 'course_id')->dropDownList($model->courses); ?>
    
    <?= $form->field($model, 'enrolment_start_date')->widget(DateRangePicker::className(), [
		'attributeTo' => 'enrolment_end_date', 
		'form' => $form, // best for correct client validation
		'language' => 'en',
		'size' => 'sm',
		'clientOptions' => [
			'autoclose' => true,
			'format' => 'yyyy-mm-dd'
		]
	]);?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
