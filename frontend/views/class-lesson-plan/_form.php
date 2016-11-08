<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ClassLessonPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-lesson-plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_subject_header_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lesson_date')->widget(DateRangePicker::className(), [
        'attributeTo' => 'end_date', 
        'form' => $form, // best for correct client validation
        'language' => 'en',
        'size' => 'sm',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
