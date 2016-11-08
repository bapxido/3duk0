<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestExamMarksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-exam-marks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'test_exam_mark_id') ?>

    <?= $form->field($model, 'class_test_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'marks_obtained') ?>

    <?= $form->field($model, 'maximum_score') ?>

    <?php // echo $form->field($model, 'percentage') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
