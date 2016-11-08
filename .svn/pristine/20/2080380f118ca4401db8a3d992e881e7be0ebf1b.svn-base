<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use kartik\widgets\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\EventsCalendar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-calendar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->widget(
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
		
	<?= $form->field($model, 'start_time')->widget(TimePicker::classname(), [
	'addonOptions' => [
        'asButton' => true,
        'buttonOptions' => ['class' => 'btn btn-info']
    ]]) ?>


    <?= $form->field($model, 'end_date')->widget(
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
		
	<?= $form->field($model, 'end_time')->widget(TimePicker::classname(), [
	'addonOptions' => [
        'asButton' => true,
        'buttonOptions' => ['class' => 'btn btn-info']
    ]]) ?>
    
<!--
    ?= $form->field($model, 'start_time')->textInput() ?>
    
    ?= $form->field($model, 'end_time')->textInput() ?>
-->

    <?= $form->field($model, 'venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

<!--
    ?= $form->field($model, 'create_user_id')->textInput() ?>

    ?= $form->field($model, 'create_date')->textInput() ?>

    ?= $form->field($model, 'update_user_id')->textInput() ?>

    ?= $form->field($model, 'update_date')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
