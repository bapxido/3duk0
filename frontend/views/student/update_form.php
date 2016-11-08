<?php
use yii\helpers\Html;
//~ use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;
?>

<?php //$form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'student-form']]);?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    
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

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'male' => 'Male', 'female' => 'Female', ], ['prompt' => '']) ?>
    
    <?= $form->field($model, 'nationality')->dropDownList($model->nationalities); ?>

    <?= $form->field($model, 'national_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

<!--
    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
-->

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', '' => '', ], ['prompt' => '']) ?>
<!--

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success showModalButton' : 'btn btn-primary showModalButton']) ?>
    </div>
      
