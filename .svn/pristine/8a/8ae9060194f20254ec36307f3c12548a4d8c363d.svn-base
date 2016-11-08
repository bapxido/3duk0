<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestExamMarks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-exam-marks-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'test-exam-marks-form']]);?>

    <?= $form->field($model, 'test_exam_mark_id')->textInput() ?>

    <?= $form->field($model, 'class_test_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'marks_obtained')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maximum_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
