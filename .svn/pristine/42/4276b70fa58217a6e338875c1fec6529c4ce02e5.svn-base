<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicDaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-day-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'academic_day_id') ?>

    <?= $form->field($model, 'academic_period_id') ?>

    <?= $form->field($model, 'day_date') ?>

    <?= $form->field($model, 'week_number') ?>

    <?= $form->field($model, 'day_type_id') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
