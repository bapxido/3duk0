<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'staff_member_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'national_id') ?>

    <?php // echo $form->field($model, 'passport_id') ?>

    <?php // echo $form->field($model, 'staff_type_id') ?>

    <?php // echo $form->field($model, 'photo') ?>

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