<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounsellingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guidance-counselling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guidance_counselling_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'staff_member_id') ?>

    <?= $form->field($model, 'subject_matter') ?>

    <?= $form->field($model, 'gc_category_id') ?>

    <?php // echo $form->field($model, 'gc_date') ?>

    <?php // echo $form->field($model, 'case') ?>

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
