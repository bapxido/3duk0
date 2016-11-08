<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\typeahead\Typeahead;
use unclead\widgets\MultipleInput;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplicationCourse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-application-course-form box box-primary">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'application_id')->textInput() ?>
    <?= $form->field($model, 'student_application_id')->dropDownList($model->applications);  ?>

    <?php //$form->field($model, 'course_id')->textInput() ?>
    <?= $form->field($model, 'course_id')->dropDownList($model->courses);  ?>

    <?php //$form->field($model, 'attendance_type_id')->textInput() ?>
    <?= $form->field($model, 'attendance_type_id')->dropDownList($model->attendanceTypes);  ?>
    
    <?php
     //echo $form->field($model, 'application_status')->dropDownList([ 'admitted' => 'Admitted', 'rejected' => 'Rejected', 'pending' => 'Pending', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

</div>
