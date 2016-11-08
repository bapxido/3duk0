<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_contact_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'physical_address') ?>

    <?= $form->field($model, 'postal_address') ?>

    <?= $form->field($model, 'town_village') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
