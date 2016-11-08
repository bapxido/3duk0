<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_application_id') ?>

    <?= $form->field($model, 'application_date') ?>

    <?= $form->field($model, 'first_application') ?>

    <?= $form->field($model, 'attendance_type_id') ?>

    <?= $form->field($model, 'application_status') ?>

    <?php // echo $form->field($model, 'academic_period_id') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
