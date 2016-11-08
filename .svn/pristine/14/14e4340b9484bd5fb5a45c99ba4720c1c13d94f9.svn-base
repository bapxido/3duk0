<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberQualifications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-member-qualifications-form">

     <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'staff-member-qualifications-form']]);?>

    <?= $form->field($model, 'qualification_id')->dropDownList($model->qualifications); ?>

    <?= $form->field($model, 'institution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_start_date')->widget(DateRangePicker::className(), [
		'attributeTo' => 'training_end_date', 
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
