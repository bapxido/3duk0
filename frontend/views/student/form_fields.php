<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\file\FileInput;

?>
<?php //$form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'student-form']]);?>
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'title')->dropDownList([ 'mr' => 'Mr.', 'miss' => 'Miss', 'mrs' => 'Mrs'], ['prompt' => '-select title-']) ?>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'first_name', ['template' => '{label}{input}{error}'])->textInput(['maxlength' => true]) ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'sex')->dropDownList([ 'male' => 'Male', 'female' => 'Female', ], ['prompt' => '-select gender-']) ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'birth_date')->widget(
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
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'nationality')->dropDownList($model->nationalities); ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'national_id')->textInput(['maxlength' => true]) ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'file')->widget(FileInput::classname(), [
				'options' => ['multiple' => false, 'accept' => 'image/*'],
			]); ?>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', '' => '', ], ['prompt'=>'-select record status-']) ?>
		</div>
	</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update Student', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

      
