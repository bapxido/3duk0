<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassTestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'class_test_id') ?>

    <?= $form->field($model, 'class_subject_header_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'class_test_type_id') ?>

    <?= $form->field($model, 'test_document') ?>

    <?php // echo $form->field($model, 'maximum_score') ?>

    <?php // echo $form->field($model, 'test_date') ?>

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
