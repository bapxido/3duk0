<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectRoll */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="class-subject-roll-form">

    <?php $form = ActiveForm::begin(['id'=>$model->formName()]); ?>

    <?= $form->field($model, 'student_course_id')->dropDownList($model->studentCourses($model->class_subject_header_id)); ?>
    
    <?= $form->field($model, 'class_subject_header_id')->dropDownList($model->classSubjectHeaders); ?>

    <?= $form->field($model, 'enrolment_date')->widget(
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
		
    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$script = <<< JS
$('form#{$model->formName()}').on('beforeSubmit', function(e) {
	var \$form = $(this);
    $.post(
			\$form.attr("action"), // serialize Yii2 form
			\$form.serialize()
	)
		.done(function(result){
			if(result == 1)
				{
					$(\$form).trigger("reset");
					$.pjax.reload({container:'#classSubjectRollGrid'});
				}
				else
				{
					$("#message").html(result);
				}		
			})
		.fail(function(){
				console.log("server error");
			});
		return false; 
});
JS;
$this->registerJs($script);
?>


