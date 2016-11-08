<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subject-assignment-form">

    <!-- <?php $form = ActiveForm::begin(); ?> -->
    <?php $form = ActiveForm::begin(['layout'=>'horizontal', 'options' => ['enctype' => 'multipart/form-data'], 'id'=>$model->formName()]);  ?>

    <!-- <?= $form->field($model, 'class_subject_header_id')->textInput() ?> -->

    <?= $form->field($model, 'assignment_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assignment_issue_date')->widget(DateRangePicker::className(), [
        'attributeTo' => 'assignment_due_date', 
        'form' => $form, // best for correct client validation
        'language' => 'en',
        'size' => 'sm',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <!-- <?= $form->field($model, 'assignment_document')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'file')->fileInput(); ?> 

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>
<!-- 
    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'update_id')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
